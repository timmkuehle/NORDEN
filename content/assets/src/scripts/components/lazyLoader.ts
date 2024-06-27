const loadLazyResource = (resource: HTMLImageElement | HTMLSourceElement) => {
	if (resource.dataset.src) {
		resource.setAttribute("src", resource.dataset.src);
	}

	if (resource.dataset.srcset) {
		resource.setAttribute("srcset", resource.dataset.srcset);
	}

	resource.classList.remove("lazy");
	delete resource.dataset?.src;
	delete resource.dataset?.srcset;
};

const setupLazyLoader = () => {
	const lazyResources: NodeListOf<HTMLImageElement> =
		document.querySelectorAll("img.lazy, video.lazy, .video.lazy>video");

	if ("IntersectionObserver" in window) {
		const lazyLoadingOberver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						const lazyResource = entry.target;

						if (lazyResource instanceof HTMLImageElement)
							loadLazyResource(lazyResource);

						if (lazyResource instanceof HTMLVideoElement) {
							Array.from(
								lazyResource.getElementsByTagName("source")
							).forEach((source) => {
								loadLazyResource(source);
							});

							lazyResource.load();
						}

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
