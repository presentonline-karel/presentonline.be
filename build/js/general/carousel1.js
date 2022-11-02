/*const carousel1 = () => {
  const carousel = document.querySelector(".carousel-1"),
    slides = Array.from(carousel.children);

  let isDragging = false,
    startPos = 0,
    currentTranslate = 0,
    prevTranslate = 0,
    animationID,
    currentIndex = 0;

  slides.forEach((slide, index) => {
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
  });

  // make responsive to viewport changes
  window.addEventListener("resize", setPositionByIndex);

  // prevent menu popup on long press
  window.oncontextmenu = function (event) {
    event.preventDefault();
    event.stopPropagation();
    return false;
  };

  function getPositionX(event) {
    return event.type.includes("mouse")
      ? event.pageX
      : event.touches[0].clientX;
  }

  function touchStart(index) {
    return function (event) {
      currentIndex = index;
      startPos = getPositionX(event);
      isDragging = true;
      animationID = requestAnimationFrame(animation);
      carousel.classList.add("grabbing");
    };
  }

  function touchMove(event) {
    if (isDragging) {
      const currentPosition = getPositionX(event);
      currentTranslate = prevTranslate + currentPosition - startPos;
    }
  }

  function touchEnd() {
    cancelAnimationFrame(animationID);
    isDragging = false;
    const movedBy = currentTranslate - prevTranslate;

    // if moved enough negative then snap to next slide if there is one
    if (movedBy < -160 && currentIndex < slides.length - 1) currentIndex += 1;

    // if moved enough positive then snap to previous slide if there is one
    if (movedBy > 160 && currentIndex > 0) currentIndex -= 1;

    setPositionByIndex();

    carousel.classList.remove("grabbing");
  }

  function animation() {
    setSliderPosition();
    if (isDragging) requestAnimationFrame(animation);
  }

  function setPositionByIndex() {
    currentTranslate = currentIndex * -244;
    prevTranslate = currentTranslate;
    setSliderPosition();
  }

  function setSliderPosition() {
    carousel.style.transform = `translateX(${currentTranslate}px)`;
  }
};

carousel1();
*/