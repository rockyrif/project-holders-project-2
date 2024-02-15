function changeNaveBg() {
    var navbar = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    console.log(scrollValue);

    if (scrollValue < 100) {
        navbar.classList.remove('change-navbg-onScroll-in');
        navbar.classList.add('change-navbg-onScroll-out');
    } else {
        navbar.classList.add('change-navbg-onScroll-in');
        navbar.classList.remove('change-navbg-onScroll-out');
    }
}

window.addEventListener('scroll', changeNaveBg);