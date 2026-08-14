const loadVideos = () => {
	const videos = document.getElementsByTagName("video");

	Array.from(videos).map((video) => {
		const parent = video.parentElement;
		const placeholder = parent?.getElementsByClassName("video-placeholder")[0];

		if (!placeholder || !parent) return;

		const hidePlaceholder = () => {
			parent.classList.add("can-play");
			video.removeEventListener("loadeddata", hidePlaceholder);
			video.removeEventListener("canplay", hidePlaceholder);
			video.removeEventListener("playing", hidePlaceholder);
		};

		// Already have frames available (e.g. cached) — show video immediately.
		if (video.readyState >= 2) {
			hidePlaceholder();
			return;
		}

		video.addEventListener("loadeddata", hidePlaceholder);
		video.addEventListener("canplay", hidePlaceholder);
		video.addEventListener("playing", hidePlaceholder);

		// Ensure the browser actually starts fetching when src is already set.
		if (video.readyState === 0 && video.querySelector("source[src]")) {
			video.load();
		}
	});
};

export default loadVideos;
