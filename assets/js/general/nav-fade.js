const navFade = () => {
    let lastScrollY = window.scrollY;
    const nav = document.querySelector("nav");

    nav.classList.add("nav-dynamic");



    window.addEventListener("scroll", function() {

        /* show/hide nav */
        if (lastScrollY < window.scrollY) {
            nav.classList.add("nav-hidden");
        } else {
            nav.classList.remove("nav-hidden");
        }
        
        lastScrollY = window.scrollY;

        /* add/remove box-shadow */
        if(window.pageYOffset > 0) {
            nav.classList.add("nav-scrolled");
        } else {
            nav.classList.remove("nav-scrolled");
        }
    });
};

navFade();