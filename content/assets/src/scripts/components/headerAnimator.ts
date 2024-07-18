const setupHeaderAnimation = () => {
	const siteHeader = document.querySelector("header.site-header");
	const menuCheckbox = <HTMLInputElement | null>(
		document.querySelector("#mobile-menu-checkbox")
	);
	const projectArchive = document.querySelector(".project-archive");

	if (!siteHeader) return;

	let lastScrollTop =
		window.pageYOffset || document.documentElement.scrollTop;

	const animateHeaderOnScroll = () => {
		const curScrollTop =
			projectArchive?.scrollTop ||
			window.pageYOffset ||
			document.documentElement.scrollTop;
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
	};

	if (projectArchive) {
		projectArchive.addEventListener("scroll", animateHeaderOnScroll);
		return;
	}

	document.addEventListener("scroll", animateHeaderOnScroll);
};

export default setupHeaderAnimation;
