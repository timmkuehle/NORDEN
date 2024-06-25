type FontFilePath = `/${string}`;

type FontFormat = "truetype" | "opentype" | "woff" | "woff2" | "svg";

type FontWeight =
	| 100
	| 200
	| 300
	| 400
	| 500
	| 600
	| 700
	| 900
	| "normal"
	| "lighter"
	| "light"
	| "bolder"
	| "bold";

type FontStyle = "normal" | "italic" | "oblique";

type VerticalMetricsOverrideValue = "normal" | `${number}%`;

export interface FontFace {
	fontFamily: string;
	filePath: FontFilePath;
	format: FontFormat;
	fontStyle?: FontStyle;
	fontWeight?: FontWeight;
	ascentOverride?: VerticalMetricsOverrideValue;
	descentOverride?: VerticalMetricsOverrideValue;
}
