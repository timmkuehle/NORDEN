const setupVideoAutoPlayer = () => {
	const autoplayVideos = document.querySelectorAll(".video > video");

	if ("IntersectionObserver" in window) {
		const videoAutoplayObserver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					const { target: video } = entry;

					if (!(video instanceof HTMLVideoElement)) return;

					if (entry.isIntersecting) {
						const playVideo = () => {
							// Autoplay is only allowed if muted (esp. iOS Safari).
							video.muted = true;
							video.setAttribute("muted", "");
							video.playsInline = true;
							video.setAttribute("playsinline", "");
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
				// Autoplay is only allowed if muted (esp. iOS Safari).
				video.muted = true;
				video.setAttribute("muted", "");
				video.playsInline = true;
				video.setAttribute("playsinline", "");
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
