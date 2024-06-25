import { FontFace } from "../types";

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
			`@font-face{font-family:${fontFamily};src:url(\"${filePath}\")format(\"${format}\");` +
			`font-style:${fontStyle || "normal"};` +
			(fontWeight ? `font-weight:${fontWeight};` : "") +
			(ascentOverride ? `ascent-override:${ascentOverride};` : "") +
			(descentOverride ? `descent-override:${descentOverride};` : "") +
			"font-display:swap;}"
		);
	}, "");
};

const loadFonts = (fonts: FontFace[]) => {
	const styleTag = document.createElement("style");
	styleTag.innerHTML = parseFontFaceRules(fonts);

	if ("requestIdleCallback" in window) {
		requestIdleCallback(() => {
			document.head.append(styleTag);
		});

		return;
	}

	setTimeout(() => {
		document.head.append(styleTag);
	}, 0);
};

export default loadFonts;
