import loadFonts from "./components/fontLoader";
import baseFonts from "./constants/baseFonts";
import loadVideos from "./components/videoLoader";
import setupLazyLoader from "./components/lazyLoader";
import setupVideoAutoPlayer from "./components/videoAutoPlayer";
import setupHeaderStateSetter from "./components/headerStateSetter";

if (!/\/projekte\/[^?&]+/.test(window.location.href)) {
	loadFonts(baseFonts);
}

document.addEventListener("DOMContentLoaded", () => {
	loadVideos();
	setupLazyLoader();
	setupVideoAutoPlayer();
	setupHeaderStateSetter();
});
