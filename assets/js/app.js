require("../sass/style.scss");

//MENU MOBILE
//Selectors
const body = document.querySelector("body");
const burger = document.querySelector(".site-header__burger");
const menu = document.querySelector(".site-header__navigation");

//Events
burger.addEventListener("click", toggleMenu);

//Functions
function toggleMenu() {
	menu.classList.toggle("active");
	burger.classList.toggle("active");
	body.classList.toggle("active");
}
