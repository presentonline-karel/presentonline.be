const inViewport = (elem) => {
  let allElements = document.querySelectorAll(elem);
  let windowHeight = window.innerHeight;
  const elems = () => {
    for (let i = 0; i < allElements.length; i++) {
      //  loop through the sections
      let viewportOffset = allElements[i].getBoundingClientRect(); //  returns the size of an element and its position relative to the viewport
      let top = viewportOffset.top; //  get the offset top
      if (top < windowHeight) {
        //  if the top offset is less than the window height
        allElements[i].classList.add("in-viewport"); //  add the class
      } else {
        allElements[i].classList.remove("in-viewport"); //  remove the class
      }
    }
  };
  elems();
  window.addEventListener("scroll", elems);
};

inViewport(".fade-section"); //  run the function on all section elements
