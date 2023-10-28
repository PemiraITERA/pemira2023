// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
const header = document.querySelector("#header");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
    header.classList.toggle("border-b-[2px]");
    header.classList.toggle("drop-shadow-header-shadow");
});