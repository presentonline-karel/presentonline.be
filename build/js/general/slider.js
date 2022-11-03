const Slider = () => {
    const sliderContainers = document.querySelectorAll(".slider-container");

    sliderContainers.forEach(container => {
        const slider = container.querySelector(".slider");
        const innerSlider = container.querySelector(".slider__inner");

        const arrowLeft = container.querySelector(".arrow-left");
        const arrowRight = container.querySelector(".arrow-right");

        let pressed = false;
        let startx;
        let x;



        //Touch events mobile
        slider.addEventListener("touchstart", (e) => {
            pressed = true;

            startx = e.targetTouches[0].clientX - innerSlider.scrollLeft;
        }, {passive: true});

        slider.addEventListener("touchmove", (e) => {
            if(!pressed) return;

            x = e.targetTouches[0].clientX;

            innerSlider.offsetLeft = `${x + startx}px`;
        }, {passive: true});



        //Arrow events
        arrowLeft.addEventListener("click", () => {
            let slideWidth = innerSlider.querySelector(".slide").offsetWidth;

            startx = innerSlider.scrollLeft;

            innerSlider.scrollLeft = startx - slideWidth;
        });

        arrowRight.addEventListener("click", () => {
            let slideWidth = innerSlider.querySelector(".slide").offsetWidth;

            startx = innerSlider.scrollLeft;

            innerSlider.scrollLeft = startx + slideWidth;
        });
    });
}

Slider();