// nav bar transperancy
function changeNaveBg() {
    var navbar = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    console.log(scrollValue);

    if (scrollValue < 150) {
        navbar.classList.remove('change-navbg-onScroll-in');
        navbar.classList.add('change-navbg-onScroll-out');
    } else {
        navbar.classList.add('change-navbg-onScroll-in');
        navbar.classList.remove('change-navbg-onScroll-out');
    }
}

window.addEventListener('scroll', changeNaveBg);

// id navigathion

document.addEventListener("DOMContentLoaded", function() {
    // Get the target element
    var targetElement = document.getElementById('adtcnews');
    
    // Add event listener to the anchor tag
    document.querySelector('a').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default behavior of anchor tag

        // Calculate the offset to scroll to
        var offset = targetElement.offsetTop - window.innerHeight + 93;

        // Scroll to the target element with the offset
        window.scrollTo({
            top: offset,
            behavior: 'smooth' // Optional: Use smooth scrolling
        });
    });
});