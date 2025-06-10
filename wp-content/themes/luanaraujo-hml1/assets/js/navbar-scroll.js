document.addEventListener("DOMContentLoaded", function () {
	const navbarInternas = document.querySelector(".navbar4_component");
	const isFrontPage = document.body.classList.contains("home");

	// Only apply scroll behavior on front page
	if (isFrontPage) {
		let lastScrollTop = 0;

		// Initially show the navbar
		navbarInternas.style.transform = "translateY(0)";
		navbarInternas.style.transition = "transform 0.3s ease-in-out";

		window.addEventListener("scroll", function () {
			const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

			if (scrollTop > lastScrollTop && scrollTop > 100) {
				// Scrolling down - hide navbar
				navbarInternas.style.transform = "translateY(-100%)";
			} else {
				// Scrolling up or at top - show navbar
				navbarInternas.style.transform = "translateY(0)";
			}

			lastScrollTop = scrollTop;
		});
	} else {
		// On other pages, ensure the navbar is always visible
		navbarInternas.style.transform = "translateY(0)";
	}
});
