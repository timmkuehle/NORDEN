const AUTO_SLIDE_INTERVAL = 6000;

function initCarousel(container: HTMLElement): void {
	const carousel = container.querySelector<HTMLElement>(".carousel");
	if (!carousel) return;

	const track = carousel.querySelector<HTMLElement>(".carousel-track");
	const slides = carousel.querySelectorAll<HTMLElement>(".carousel-slide");
	const prevBtn = container.querySelector<HTMLButtonElement>(".carousel-prev");
	const nextBtn = container.querySelector<HTMLButtonElement>(".carousel-next");

	if (!track || !slides.length || !prevBtn || !nextBtn) return;

	let index = 0;
	const total = slides.length;
	let autoSlideTimer: ReturnType<typeof setInterval>;

	function update(): void {
		track.style.transform = `translateX(-${index * 100}%)`;
	}

	function goNext(): void {
		index = index >= total - 1 ? 0 : index + 1;
		update();
	}

	function resetAutoSlide(): void {
		clearInterval(autoSlideTimer);
		autoSlideTimer = setInterval(goNext, AUTO_SLIDE_INTERVAL);
	}

	prevBtn.addEventListener("click", () => {
		index = index <= 0 ? total - 1 : index - 1;
		update();
		resetAutoSlide();
	});

	nextBtn.addEventListener("click", () => {
		goNext();
		resetAutoSlide();
	});

	update();
	resetAutoSlide();
}

function initAllCarousels(): void {
	const scoped = document.querySelectorAll<HTMLElement>(
		".project-wrapper.oetztal-cd .carousel-container"
	);
	const generic = document.querySelectorAll<HTMLElement>(".carousel-container");

	const containers = scoped.length ? scoped : generic;
	containers.forEach(initCarousel);
}

if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", initAllCarousels);
} else {
	initAllCarousels();
}
