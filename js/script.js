document.addEventListener("click", function (event) {
    let nav = document.querySelector("nav");
    let menuIcon = document.querySelector(".menu-icon");

    // Check if the click is outside the navigation and menu icon
    if (!nav.contains(event.target) && !menuIcon.contains(event.target)) {
        nav.classList.remove("active");
    }
});

function toggleMenu() {
    let nav = document.querySelector("nav");
    nav.classList.toggle("active");
}