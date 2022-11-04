const counterUpAnimation = () => {
    const counters = document.querySelectorAll(".counter");
    const sectionOne = document.querySelector(".about");

    var animationDone = false;

    const sectionOneOptions = {
        rootMargin: "0px 0px 0px 0px"
    };

    const sectionOneObserver = new IntersectionObserver(function (entries, sectionOneObserver) {
        entries.forEach(entry => {
            if(animationDone == false) {
                if (entry.isIntersecting) {
                    counters.forEach((counter) => {
                        counter.innerText = "0";
    
                        const updateCounter = () => {
                            const target = +counter.getAttribute("data-target");
                            const c = +counter.innerText;
    
                            const increment = target / 48;
                            
                            if (c < target) {
                                counter.innerText = `${Math.ceil(c + increment)}`;
                                setTimeout(updateCounter, 80);
                            }

                            //add + at the end of number
                            else {
                                if(counter.classList.contains("plus")) {
                                    counter.innerHTML += "+";
                                }
                            }
                        };
    
                        updateCounter();
                    });

                    animationDone = true;
                }
            }
        });
    }, sectionOneOptions);

    sectionOneObserver.observe(sectionOne);
}

counterUpAnimation();