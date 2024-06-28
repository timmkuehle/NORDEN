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
			} else {
				siteHeader.classList.remove("hidden");

				if (!siteLogo || !(siteLogo instanceof SVGElement)) return;
			}

			lastScrollTop = curScrollTop;
		}
	});
};

export default setupHeaderAnimation;
