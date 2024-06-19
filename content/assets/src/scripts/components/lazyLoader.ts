const setupLazyLoader = () => {
	const lazyResources: NodeListOf<HTMLImageElement> =
		document.querySelectorAll("img.lazy");

	if ("IntersectionObserver" in window) {
		const lazyLoadingOberver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						const lazyResource = entry.target;

						if (!(lazyResource instanceof HTMLImageElement)) return;

						lazyResource.setAttribute(
							"src",
							lazyResource.dataset?.src || ""
						);
						lazyResource.setAttribute(
							"srcset",
							lazyResource.dataset?.srcset || ""
						);
						lazyResource.classList.remove("lazy");
						observer.unobserve(lazyResource);
					}
				});
			},
			{ rootMargin: "0px 0px 100% 0px" }
		);

		lazyResources.forEach((resource) => {
			lazyLoadingOberver.observe(resource);
		});
	} else {
		lazyResources.forEach((resource) => {
			resource.setAttribute("src", resource.dataset?.src || "");
			resource.setAttribute("srcset", resource.dataset?.srcset || "");
		});
	}
};

export default setupLazyLoader;
