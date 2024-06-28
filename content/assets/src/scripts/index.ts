import loadFonts from "./components/fontLoader";
import baseFonts from "./constants/baseFonts";
import loadVideos from "./components/videoLoader";
import setupLazyLoader from "./components/lazyLoader";
import setupVideoAutoPlayer from "./components/videoAutoPlayer";
import setupHeaderAnimation from "./components/headerAnimator";

if (!/\/projekte\/[^?&]+/.test(window.location.href)) {
	loadFonts(baseFonts);
}

document.addEventListener("DOMContentLoaded", () => {
	loadVideos();
	setupLazyLoader();
	setupVideoAutoPlayer();
	setupHeaderAnimation();
});
