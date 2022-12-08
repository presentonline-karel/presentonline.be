const Slider = () => {
    const sliderContainers = document.querySelectorAll('.slider-container');

    sliderContainers.forEach(container => {
        const slider = container.querySelector('.slider');
        const innerSlider = container.querySelector('.slider__inner');

        const arrowLeft = container.querySelector('.arrow-left');
        const arrowRight = container.querySelector('.arrow-right');

        let pressed = false;
        let startx;
        let x;



        //Mouse events desktop
        slider.addEventListener('mousedown', (e) => {
            pressed = true;
            startx = e.offsetX - innerSlider.offsetLeft;
            slider.style.cursor = 'grabbing';
        });

        slider.addEventListener('mouseenter', () => {
            slider.style.cursor = 'grab';
        })

        slider.addEventListener('mouseup', () => {
            slider.style.cursor = 'grab';
        });

        window.addEventListener('mouseup', () => {
            pressed = false;
        });

        slider.addEventListener('mousemove', (e) => {
            if(!pressed) return;
            e.preventDefault();

            x = e.offsetX;

            innerSlider.style.left = `${x - startx}px`;

            checkBoundary();
        });



        //Touch events mobile
        slider.addEventListener('touchstart', (e) => {
            pressed = true;
            startx = e.targetTouches[0].clientX - innerSlider.offsetLeft;
        }, {passive: true});

        slider.addEventListener('touchmove', (e) => {
            if(!pressed) return;
            x = e.targetTouches[0].clientX;

            innerSlider.style.left = `${x - startx}px`;  
            checkBoundary();
        }, {passive: true});



        //Arrow events
        arrowLeft.addEventListener('click', () => {
            let slideWidth = innerSlider.querySelector('.slide').offsetWidth;

            startx = innerSlider.offsetLeft;
            innerSlider.style.left = `${startx + slideWidth}px`;

            checkBoundary();
        });

        arrowRight.addEventListener('click', () => {
            let slideWidth = innerSlider.querySelector('.slide').offsetWidth;

            startx = innerSlider.offsetLeft;
            innerSlider.style.left = `${startx - slideWidth}px`;

            checkBoundary();
        });



        //Check boundaries so that you don't swipe too far
        function checkBoundary() {
            let outer = slider.getBoundingClientRect();
            let inner = innerSlider.getBoundingClientRect();

            if(parseInt(innerSlider.style.left) > 0) {
                innerSlider.style.left = '0px';
            }
            else if(inner.right < outer.right) {
                innerSlider.style.left = `-${inner.width - outer.width}px`;
            }
        }

        checkBoundary();
    });
}

Slider();