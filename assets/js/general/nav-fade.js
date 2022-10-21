const navFade = () => {
    let lastScrollY = window.scrollY;
    const navbar = document.getElementById("navbar");



    window.addEventListener("scroll", function() {

        /* show/hide nav */
        if (lastScrollY < window.scrollY) {
            navbar.classList.add("nav-hidden");
        } else {
            navbar.classList.remove("nav-hidden");
        }
        
        lastScrollY = window.scrollY;

        /* add/remove box-shadow */
        if(window.pageYOffset > 0) {
            navbar.classList.add("nav-scrolled");
        } else {
            navbar.classList.remove("nav-scrolled");
        }
    });
};

navFade();