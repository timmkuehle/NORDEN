const loadVideos = () => {
	const videos = document.getElementsByTagName("video");

	Array.from(videos).map((video) => {
		const placeholder =
			video.parentElement?.getElementsByClassName("video-placeholder")[0];

		if (!placeholder) return;

		video.parentElement.classList.add("can-play");
	});
};

export default loadVideos;
