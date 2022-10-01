/*slides.forEach((slide, index) => {
    const slideImage = slide.querySelector(".carousel__slide__img");

    // disable default image drag
    slideImage.addEventListener("dragstart", (e) => e.preventDefault());

    // touch events
    slide.addEventListener("touchstart", touchStart(index));
    slide.addEventListener("touchend", touchEnd);
    slide.addEventListener("touchmove", touchMove);

    // mouse events
    slide.addEventListener("mousedown", touchStart(index));
    slide.addEventListener("mouseup", touchEnd);
    slide.addEventListener("mousemove", touchMove);
    slide.addEventListener("mouseleave", touchEnd);
  });*/