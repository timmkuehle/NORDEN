const loadVideos = () => {
	const videos = document.getElementsByTagName("video");

	Array.from(videos).map((video) => {
		const placeholder =
			video.parentElement?.getElementsByClassName("video-placeholder")[0];

		if (!placeholder) return;

		if (video.readyState >= 3) {
			video.parentElement?.classList.add("can-play");

			return;
		}

		const hidePlaceholder = () => {
			video.parentElement?.classList.add("can-play");

			video.removeEventListener("canplay", hidePlaceholder);
		};

		video.addEventListener("canplay", hidePlaceholder);
	});
};

export default loadVideos;
