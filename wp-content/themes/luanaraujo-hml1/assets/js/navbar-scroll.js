document.addEventListener("DOMContentLoaded", function () {
	const navbarInternas = document.querySelector(".navbar4_component");
	let lastScrollTop = 0;

	// Initially hide the navbar
	navbarInternas.style.transform = "translateY(-100%)";
	navbarInternas.style.transition = "transform 0.3s ease-in-out";

	window.addEventListener("scroll", function () {
		const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		if (scrollTop > 100) {
			// Show navbar after scrolling 100px
			navbarInternas.style.transform = "translateY(0)";
		} else {
			navbarInternas.style.transform = "translateY(-100%)";
		}

		lastScrollTop = scrollTop;
	});
});
