import loadFonts from "./components/fontLoader";
import baseFonts from "./constants/baseFonts";
import loadVideos from "./components/videoLoader";
import setupLazyLoader from "./components/lazyLoader";
import setupVideoAutoPlayer from "./components/videoAutoPlayer";
import setupHeaderAnimation from "./components/headerAnimator";
import { setRelativeBaseDir } from "./components/baseDirSetter";

setRelativeBaseDir();

if (!/\/projekte\/[^?&]+/.test(window.location.href)) {
	loadFonts(baseFonts);
}

document.addEventListener("DOMContentLoaded", () => {
	loadVideos();
	setupLazyLoader();
	setupVideoAutoPlayer();
	setupHeaderAnimation();
});

// When coming back via bfcache (common on mobile Safari), DOMContentLoaded won't fire again.
window.addEventListener("pageshow", (event) => {
	// Only rerun when restored from bfcache; otherwise we may re-init on normal load.
	// (On most browsers, `pageshow` fires on every navigation.)
	// eslint-disable-next-line @typescript-eslint/no-explicit-any
	const persisted = (event as any)?.persisted;
	if (!persisted) return;

	loadVideos();
	setupLazyLoader();
	setupVideoAutoPlayer();
	setupHeaderAnimation();
});
