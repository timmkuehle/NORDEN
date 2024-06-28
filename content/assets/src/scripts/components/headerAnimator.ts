import gsap from "gsap";

const setupHeaderAnimation = () => {
	const siteHeader = document.querySelector("header.site-header");
	const siteLogo = siteHeader?.querySelector(".logo");

	if (!siteHeader) return;

	let lastScrollTop =
		window.pageYOffset || document.documentElement.scrollTop;

	document.addEventListener("scroll", () => {
		const curScrollTop =
			window.pageYOffset || document.documentElement.scrollTop;
		const scrollAmount = Math.abs(curScrollTop - lastScrollTop);

		if (scrollAmount > 30) {
			if (curScrollTop > lastScrollTop) {
				siteHeader.classList.add("hidden");

				if (!siteLogo || !(siteLogo instanceof SVGElement)) return;

				gsap.to(siteLogo, {
					attr: { viewBox: "0 0 43 45.1" },
					duration: 0.3,
					ease: "power3.inOut"
				});
			} else {
				siteHeader.classList.remove("hidden");

				if (!siteLogo || !(siteLogo instanceof SVGElement)) return;

				gsap.to(siteLogo, {
					attr: { viewBox: "0 0 256 45.1" },
					duration: 0.3,
					ease: "power3.inOut",
					delay: 0.08
				});
			}

			lastScrollTop = curScrollTop;
		}
	});
};

export default setupHeaderAnimation;
