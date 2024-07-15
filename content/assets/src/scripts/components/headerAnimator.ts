const setupHeaderAnimation = () => {
	const siteHeader = document.querySelector("header.site-header");
	const menuCheckbox = <HTMLInputElement | null>(
		document.querySelector("#mobile-menu-checkbox")
	);

	if (!siteHeader) return;

	let lastScrollTop =
		window.pageYOffset || document.documentElement.scrollTop;

	document.addEventListener("scroll", () => {
		const curScrollTop =
			window.pageYOffset || document.documentElement.scrollTop;
		const scrollAmount = Math.abs(curScrollTop - lastScrollTop);

		if (!menuCheckbox?.checked) {
			if (scrollAmount > 30) {
				if (curScrollTop > lastScrollTop) {
					siteHeader.classList.add("hidden");
				} else {
					siteHeader.classList.remove("hidden");
				}

				lastScrollTop = curScrollTop;
			}
		}
	});
};

export default setupHeaderAnimation;
