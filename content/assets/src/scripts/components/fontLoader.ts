import { FontFace } from "../types";

const preloadFonts = (fonts: FontFace[]) => {
	fonts.map((font) => {
		const linkTag = document.createElement("link");

		const { filePath, format } = font;

		linkTag.rel = "preload";
		linkTag.href = filePath.replace(/^\.*\/*/, "/");
		linkTag.as = "font";
		linkTag.type = `font/${format}`;
		linkTag.crossOrigin = "anonymous";

		document.head.append(linkTag);
	});
};

const parseFontFaceRules = (fonts: FontFace[]) => {
	return fonts.reduce((rules, curFont) => {
		const {
			fontFamily,
			filePath,
			format,
			fontStyle,
			fontWeight,
			ascentOverride,
			descentOverride
		} = curFont;

		return (
			rules +
			`@font-face{font-family:${fontFamily};` +
			`src:url(\"${filePath.replace(/^\.*\/*/, "/")}\")format(\"${format}\");` +
			`font-style:${fontStyle || "normal"};` +
			(fontWeight ? `font-weight:${fontWeight};` : "") +
			(ascentOverride ? `ascent-override:${ascentOverride};` : "") +
			(descentOverride ? `descent-override:${descentOverride};` : "") +
			"font-display:swap;}"
		);
	}, "");
};

const loadFonts = (fonts: FontFace[]) => {
	preloadFonts(fonts);

	const styleTag = document.createElement("style");
	styleTag.innerHTML = parseFontFaceRules(fonts);

	if ("requestIdleCallback" in window) {
		requestIdleCallback(async () => {
			document.head.append(styleTag);
		});

		return;
	}

	setTimeout(async () => {
		document.head.append(styleTag);
	}, 0);
};

export default loadFonts;
