import loadFonts from "./components/fontLoader";
import baseFonts from "./constants/baseFonts";
import setupLazyLoader from "./components/lazyLoader";

if (!/\/projekte\/[^?&]+/.test(window.location.href)) {
	loadFonts(baseFonts);
}

document.addEventListener("DOMContentLoaded", () => {
	setupLazyLoader();
});
