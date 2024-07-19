import loadFonts from "@scripts/components/fontLoader";
import fonts from "./fonts";
import setupImageSlideshows from "@scripts/components/imageSlideshow";

loadFonts(fonts);

document.addEventListener("DOMContentLoaded", () => {
	setupImageSlideshows();
});
