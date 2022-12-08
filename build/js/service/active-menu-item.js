const serviceNavItemActive = () => {
    const allMenuItems = document.querySelectorAll('.nav__link__item');
    
    for (let i = 0; i < allMenuItems.length; i++) {
        if(allMenuItems[i].innerText == "Diensten" || allMenuItems[i].innerText == "Services") {
            allMenuItems[i].classList.add("active");
        }
    }
}

serviceNavItemActive();