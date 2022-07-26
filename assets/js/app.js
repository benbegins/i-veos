require("../sass/style.scss")
import { gsap } from "gsap"

//LOADER
const loader = document.querySelector(".loader")
const links = document.querySelectorAll("a")
window.addEventListener("pageshow", function () {
	loader.classList.add("fadeout")
	animIntro()
})
links.forEach((link) => {
	link.addEventListener("click", function (e) {
		if (!link.classList.contains("no-transition")) {
			e.preventDefault()
			const href = e.target.href
			loader.classList.remove("fadeout")
			loader.addEventListener("transitionend", function () {
				window.location.assign(href)
			})
		}
	})
})

//MENU MOBILE
//Selectors
const body = document.querySelector("body")
const burger = document.querySelector(".site-header__burger")
const menu = document.querySelector(".site-header__navigation")

//Events
burger.addEventListener("click", toggleMenu)

//Functions
function toggleMenu() {
	menu.classList.toggle("active")
	burger.classList.toggle("active")
	body.classList.toggle("active")
}

//MENU STICKY
const header = document.querySelector(".site-header")
window.addEventListener("scroll", function () {
	if (this.pageYOffset > 20) {
		header.classList.add("sticky")
	} else {
		header.classList.remove("sticky")
	}
})

//TESTIMONIALS
const testimonialExcerpt = document.querySelectorAll(".testimonial-home__item")

if (testimonialExcerpt && window.innerWidth > 1024) {
	//Seclectors
	const cursorDeploy = document.querySelector(".cursor-testimonial")

	//Deploy testomonial
	testimonialExcerpt.forEach((item, index) => {
		item.addEventListener("mouseout", function () {
			cursorDeploy.style.opacity = 0
		})
		item.addEventListener("mouseenter", function () {
			cursorDeploy.style.opacity = 1
			this.addEventListener("mousemove", function (e) {
				item.style.cursor = "none"
				cursorDeploy.style.top = e.clientY + "px"
				cursorDeploy.style.left = e.clientX + "px"
			})
		})
		item.addEventListener("click", function () {
			cursorDeploy.classList.add("active")
			let testimonial = document.querySelector(
				".testimonial-" + (index + 1)
			)
			let testimonialContent = testimonial.querySelector(
				".testimonial-home__full-textcontainer"
			)
			testimonial.classList.add("active")
			testimonialContent.classList.add("active")
			body.classList.add("active")

			let closeBtn = testimonial.querySelector(".btn-close")
			closeBtn.addEventListener("click", function () {
				testimonial.classList.remove("active")
				testimonialContent.classList.remove("active")
				cursorDeploy.classList.remove("active")
				body.classList.remove("active")
			})
		})
	})
}

//SE FAIRE RAPPELER
const btnRappeler = document.querySelector(".btn-rappeler")
if (btnRappeler) {
	const rappelForm = document.querySelector(".rappeler-form")
	const contentForm = rappelForm.querySelector(".rappeler-form__wrap")
	const closeBtn = rappelForm.querySelector(".btn-close")
	//Open modal
	btnRappeler.addEventListener("click", function () {
		rappelForm.classList.add("active")
		contentForm.classList.add("active")
		body.classList.add("active")
	})
	//Close modal
	closeBtn.addEventListener("click", function () {
		rappelForm.classList.remove("active")
		contentForm.classList.remove("active")
		body.classList.remove("active")
	})
}

//REVEAL ANIMATIONS
//Config
const intro = gsap.timeline({
	defaults: {
		ease: "power2.inOut",
		duration: 1,
	},
})
function animIntro() {
	if (document.querySelector(".site-hero__image-reveal")) {
		//Animation Hero Image
		intro.from(".site-hero__image-reveal", { x: "-100%" }, "+=0.3")
		intro.from(".site-hero__image-container img", { x: "100px" }, "-=1")
		intro.from(".site-hero__image-overlay", { opacity: 0 }, "-=0.5")
		intro.from(
			".site-hero__image-container .bloc-1",
			{ scaleX: 0, x: "-50%" },
			"-=1.3"
		)
		intro.from(".site-hero__background", { x: "-100%" }, "-=1")
		intro.from(
			".site-hero__title-container",
			{ y: "100px", opacity: 0, ease: "power2.out" },
			"-=0.5"
		)
		intro.from(".site-header", { y: "-200px", ease: "power2.out" }, "-=1.8")
		intro.from(".first-content", { opacity: 0 }, "-=1")
	} else if (document.querySelector(".hero-text")) {
		//Animation Hero Text
		intro.from(
			".hero-text__title",
			{
				y: "100px",
				opacity: 0,
				ease: "power2.out",
			},
			"+=0.9"
		)
		intro.from(".site-header", { y: "-200px", ease: "power2.out" }, "-=1.5")
		intro.from(".first-content", { opacity: 0 }, "-=1")
	} else if (document.querySelector(".hero-informatique")) {
		//Animation Page Informatique
		intro.to(".hero-informatique__image-reveal", { x: "100%" }, "+=0.3")
		intro.from(
			".hero-informatique__image-container img",
			{ x: "100px" },
			"-=1"
		)
		intro.from(
			".hero-informatique__title-container",
			{ y: "100px", opacity: 0, ease: "power2.out" },
			"-=0.3"
		)
		intro.from(".site-header", { y: "-200px", ease: "power2.out" }, "-=1.6")
		intro.from(".vert-lines-informatique", { scaleY: 0, y: "-50%" }, "-=1")
		intro.from(".first-content", { opacity: 0 }, "-=1")
	}
}
