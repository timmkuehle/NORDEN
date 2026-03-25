const wrappers = document.querySelectorAll(".oetztal-cd .video-play-wrapper");

wrappers.forEach((wrapper) => {
	const button = wrapper.querySelector<HTMLButtonElement>(".video-play-button");
	const video = wrapper.querySelector<HTMLVideoElement>("video");

	if (!button || !video) return;

	const togglePlayPause = () => {
		if (video.paused) {
			video.play();
		} else {
			video.pause();
		}
	};

	const updateState = () => {
		wrapper.classList.toggle("is-playing", !video.paused);
		button.setAttribute("aria-label", video.paused ? "Video abspielen" : "Video pausieren");
	};

	wrapper.addEventListener("click", () => {
		togglePlayPause();
		updateState();
	});

	video.addEventListener("play", updateState);
	video.addEventListener("pause", updateState);
	updateState();
});
