const setupImageSlideshows = () => {
	const slideshows = document.querySelectorAll(".image-slideshow");

	slideshows.forEach((slideshow) => {
		const prevButton = slideshow.querySelector(".button.prev");
		const nextButton = slideshow.querySelector(".button.next");
		const imagesContainer = slideshow.querySelector(".images-container");
		const images = slideshow.querySelectorAll("img");
		const firstImage = images?.[0];
		const lastImage = images?.[(images?.length || 1) - 1];

		firstImage.classList?.add("active");

		if (firstImage === lastImage) return;

		const setUpcomingImage = (direction: "prev" | "next") => {
			const currentImage = slideshow.querySelector(
				".images-container img.active"
			);

			const upcomingImage =
				direction === "next"
					? currentImage?.nextElementSibling || firstImage
					: currentImage?.previousElementSibling || lastImage;

			currentImage?.classList.remove("active");
			upcomingImage?.classList.add("active");

			const containerLeft =
				imagesContainer?.getBoundingClientRect().left || 0;
			const upcomingImageLeft =
				upcomingImage?.getBoundingClientRect().left || 0;
			const offset = upcomingImageLeft - containerLeft;

			imagesContainer?.scrollBy({
				left: offset,
				behavior: "smooth"
			});
		};

		prevButton?.addEventListener("click", () => {
			setUpcomingImage("prev");
		});

		nextButton?.addEventListener("click", () => {
			setUpcomingImage("next");
		});

		const slideOnDrag = (element: HTMLElement, startScreenX: number) => {
			if (!element) return;

			let accumulatedDragAmount = 0;

			const handleDrag = (e: MouseEvent | TouchEvent) => {
				e.preventDefault();

				const dragScreenX =
					e instanceof TouchEvent ? e.touches[0].screenX : e.screenX;
				const dragAmount = dragScreenX - startScreenX;
				accumulatedDragAmount += dragAmount;
				startScreenX = dragScreenX;

				if (
					accumulatedDragAmount > 100 ||
					accumulatedDragAmount < -100
				) {
					handleDragEnd(e);
					return;
				}

				element.scrollBy({ left: dragAmount * -3 });
			};

			const handleDragEnd = (e: MouseEvent | TouchEvent) => {
				e.preventDefault();

				document.removeEventListener("mousemove", handleDrag);
				document.removeEventListener("touchmove", handleDrag);
				document.removeEventListener("mouseup", handleDragEnd);
				document.removeEventListener("touchend", handleDragEnd);
				document.removeEventListener("touchcancel", handleDragEnd);

				const activeImage = slideshow.querySelector(
					".images-container img.active"
				);

				if (accumulatedDragAmount > 100 && activeImage !== firstImage) {
					setUpcomingImage("prev");
				} else if (
					accumulatedDragAmount < -100 &&
					activeImage !== lastImage
				) {
					setUpcomingImage("next");
				} else {
					const containerLeft =
						imagesContainer?.getBoundingClientRect().left || 0;
					const activeImageLeft =
						activeImage?.getBoundingClientRect().left || 0;
					const offset = activeImageLeft - containerLeft;

					element.scrollBy({ left: offset, behavior: "smooth" });
				}

				accumulatedDragAmount = 0;
			};

			document.addEventListener("mousemove", handleDrag);
			document.addEventListener("touchmove", handleDrag);
			document.addEventListener("mouseup", handleDragEnd);
			document.addEventListener("touchend", handleDragEnd);
			document.addEventListener("touchcancel", handleDragEnd);
		};

		if (imagesContainer instanceof HTMLElement) {
			imagesContainer?.addEventListener("mousedown", (e) => {
				e.preventDefault();
				slideOnDrag(imagesContainer, e.screenX);
			});

			imagesContainer?.addEventListener("touchstart", (e) => {
				e.preventDefault();
				slideOnDrag(imagesContainer, e.touches[0].screenX);
			});
		}
	});
};

export default setupImageSlideshows;
