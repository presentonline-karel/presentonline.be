/* Tried to prevent menu scrolling to top when clicking it (mobile) */
window.onscroll = function (e) {
    if(nav.classList.contains("nav-active")) {
        nav.classList.remove("nav-active");
        burger.classList.remove("toggle");

        for (i = 0; i < 5; i++) {
            navLinks[i].style.animation = "";
        }
    }
}