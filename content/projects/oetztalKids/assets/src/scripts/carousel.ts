const AUTO_SLIDE_INTERVAL = 6000;

function initCarousel(container: HTMLElement): void {
	if (container.dataset.carouselInitialized === "true") {
		return;
	}

	const carousel = container.querySelector<HTMLElement>(".carousel");
	if (!carousel) {
		return;
	}

	const track = carousel.querySelector<HTMLElement>(".carousel-track");
	if (!track) {
		return;
	}
	const trackEl = track;

	const slides = carousel.querySelectorAll<HTMLElement>(".carousel-slide");
	if (!slides.length) {
		return;
	}

	const section = container.closest<HTMLElement>("section.section-2");
	if (!section) {
		return;
	}

	const prevBtns = section.querySelectorAll<HTMLButtonElement>(
		".carousel-navigation .carousel-prev"
	);
	const nextBtns = section.querySelectorAll<HTMLButtonElement>(
		".carousel-navigation .carousel-next"
	);

	if (!prevBtns.length || !nextBtns.length) {
		return;
	}

	let index = 0;
	const total = slides.length;
	let autoSlideTimer: ReturnType<typeof setInterval>;

	function update(): void {
		trackEl.style.transform = `translateX(-${index * 100}%)`;
	}

	function goNext(): void {
		index = index >= total - 1 ? 0 : index + 1;
		update();
	}

	function resetAutoSlide(): void {
		clearInterval(autoSlideTimer);
		autoSlideTimer = setInterval(goNext, AUTO_SLIDE_INTERVAL);
	}

	prevBtns.forEach((btn) => {
		btn.addEventListener("click", () => {
			index = index <= 0 ? total - 1 : index - 1;
			update();
			resetAutoSlide();
		});
	});

	nextBtns.forEach((btn) => {
		btn.addEventListener("click", () => {
			goNext();
			resetAutoSlide();
		});
	});

	update();
	resetAutoSlide();

	container.dataset.carouselInitialized = "true";
}

function initAllCarousels(): void {
	const scoped = document.querySelectorAll<HTMLElement>(
		".project-wrapper.oetztal-kids .section-2 .carousel-container"
	);
	const generic = document.querySelectorAll<HTMLElement>(
		"section.section-2 .carousel-container"
	);

	const containers = scoped.length ? scoped : generic;
	containers.forEach(initCarousel);
}

function initAllCarouselsWhenReady(): void {
	initAllCarousels();

	// Some pages may inject project markup after DOMContentLoaded.
	// If we didn't find anything, observe until the carousel appears.
	if (document.querySelector("section.section-2 .carousel-container")) {
		return;
	}

	const observer = new MutationObserver(() => {
		const found = document.querySelectorAll<HTMLElement>(
			"section.section-2 .carousel-container"
		);
		if (!found.length) return;

		found.forEach(initCarousel);
		observer.disconnect();
	});

	observer.observe(document.documentElement, { childList: true, subtree: true });
}

if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", initAllCarouselsWhenReady);
} else {
	initAllCarouselsWhenReady();
}

export {};

