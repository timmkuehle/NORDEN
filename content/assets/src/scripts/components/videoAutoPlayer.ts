const setupVideoAutoPlayer = () => {
	const autoplayVideos = document.querySelectorAll(".video.autoplay > video");

	if ("IntersectionObserver" in window) {
		const videoAutoplayObserver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					const { target: video } = entry;

					if (!(video instanceof HTMLVideoElement)) return;

					if (entry.isIntersecting) {
						const playVideo = () => {
							video.play();

							video.removeEventListener("canplay", playVideo);
						};

						if (video.readyState >= 3 && video.paused) {
							playVideo();
						} else {
							video.addEventListener("canplay", playVideo);
						}

						observer.unobserve(video);
					}
				});
			},
			{ rootMargin: "-20% 0px -20% 0px" }
		);

		autoplayVideos.forEach((video) => {
			videoAutoplayObserver.observe(video);
		});
	} else {
		Array.from(autoplayVideos).map((video) => {
			if (!(video instanceof HTMLVideoElement)) return;

			const playVideo = () => {
				video.play();

				video.removeEventListener("canplay", playVideo);
			};

			if (video.readyState >= 3 && video.paused) {
				playVideo();
			} else {
				video.addEventListener("canplay", playVideo);
			}
		});
	}
};

export default setupVideoAutoPlayer;
