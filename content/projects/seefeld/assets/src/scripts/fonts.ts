import { FontFace } from "@scripts/types";

const fonts: FontFace[] = [
	{
		fontFamily: "Kitsch Text",
		filePath:
			"/content/resources/fonts/KitschText/KitschText-Regular.woff2",
		format: "woff2",
		fontWeight: 400
	},
	{
		fontFamily: "Relevant",
		filePath: "/content/resources/fonts/Relevant/Relevant-Light.woff2",
		format: "woff2",
		fontWeight: 300,
		ascentOverride: "95%",
		descentOverride: "20%"
	},
	{
		fontFamily: "Relevant",
		filePath: "/content/resources/fonts/Relevant/Relevant-Normal.woff2",
		format: "woff2",
		fontWeight: 400,
		ascentOverride: "95%",
		descentOverride: "20%"
	},
	{
		fontFamily: "Relevant",
		filePath: "/content/resources/fonts/Relevant/Relevant-Black.woff2",
		format: "woff2",
		fontWeight: 700,
		ascentOverride: "95%",
		descentOverride: "20%"
	}
];

export default fonts;
