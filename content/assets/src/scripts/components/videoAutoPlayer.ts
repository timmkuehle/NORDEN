const setupVideoAutoPlayer = () => {
	const autoplayVideos = document.querySelectorAll(".video.autoplay > video");

	const playVideo = (video: HTMLVideoElement) => {
		// Autoplay is only allowed if muted (esp. iOS Safari).
		video.muted = true;
		video.defaultMuted = true;
		video.setAttribute("muted", "");
		video.playsInline = true;
		video.setAttribute("playsinline", "");

		const attemptPlay = () => {
			const playPromise = video.play();
			if (playPromise?.catch) {
				playPromise.catch(() => {
					// Autoplay can still be blocked; retry once data is ready.
				});
			}
		};

		if (video.readyState >= 2) {
			attemptPlay();
			return;
		}

		const onReady = () => {
			attemptPlay();
			video.removeEventListener("loadeddata", onReady);
			video.removeEventListener("canplay", onReady);
		};

		video.addEventListener("loadeddata", onReady);
		video.addEventListener("canplay", onReady);

		if (video.readyState === 0) {
			video.load();
		}
	};

	if ("IntersectionObserver" in window) {
		const videoAutoplayObserver = new IntersectionObserver(
			(entries, observer) => {
				entries.forEach((entry) => {
					const { target: video } = entry;

					if (!(video instanceof HTMLVideoElement)) return;

					if (entry.isIntersecting) {
						playVideo(video);
						observer.unobserve(video);
					}
				});
			},
			// Play as soon as any part of the video enters the viewport.
			{ rootMargin: "0px", threshold: 0.1 }
		);

		autoplayVideos.forEach((video) => {
			videoAutoplayObserver.observe(video);
		});
	} else {
		Array.from(autoplayVideos).map((video) => {
			if (!(video instanceof HTMLVideoElement)) return;
			playVideo(video);
		});
	}
};

export default setupVideoAutoPlayer;
