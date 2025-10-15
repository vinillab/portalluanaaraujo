document.addEventListener("DOMContentLoaded", function () {
	const navbarInternas = document.querySelector(".navbar4_component");
	const mainNavbar = document.querySelector(".navbar_component");
	let lastScrollTop = 0;
	const scrollThreshold = 100; // Adjust this value to control when the internal navbar appears
	const desktopBreakpoint = 992; // Desktop width breakpoint (> 991px)
	const isHomePage = document.body.classList.contains("home");

	// Initially hide the internal navbar
	if (navbarInternas) {
		// Always apply scroll behavior regardless of page type
		navbarInternas.style.display = "none";

		window.addEventListener("scroll", function () {
			const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			const windowWidth = window.innerWidth;

			// Only show navbar on desktop (> 991px)
			if (windowWidth >= desktopBreakpoint) {
				if (scrollTop > scrollThreshold) {
					// Show internal navbar when scrolled past threshold
					navbarInternas.style.display = "block";
					navbarInternas.style.position = "fixed";
					navbarInternas.style.top = "0";
					navbarInternas.style.left = "0";
					navbarInternas.style.right = "0";
					navbarInternas.style.zIndex = "1000";
					navbarInternas.style.boxShadow = "0 2px 4px rgba(0,0,0,0.1)"; // Add subtle shadow
				} else {
					// Hide internal navbar when at top
					navbarInternas.style.display = "none";
				}
			} else {
				// Always hide on tablet and mobile
				navbarInternas.style.display = "none";
			}

			lastScrollTop = scrollTop;
		});

		// Also listen for resize events to hide/show navbar based on screen size
		window.addEventListener("resize", function () {
			const windowWidth = window.innerWidth;
			const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

			if (windowWidth < desktopBreakpoint || scrollTop <= scrollThreshold) {
				navbarInternas.style.display = "none";
			}
		});
	}
});
