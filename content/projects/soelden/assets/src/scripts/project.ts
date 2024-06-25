const fontStyleTag = document.createElement("style");
fontStyleTag.innerHTML =
	'@font-face{font-family:"AS Soelden Headline";src:url("/content/resources/fonts/ASSoeldenHL/ASSoeldenHLWEB-HeavyFlex.woff")format("woff");font-weight:700;font-style:normal;font-display:swap;}@font-face{font-family:"AS Soelden";src:url("/content/resources/fonts/ASSoelden/ASSoelden-Regular.woff")format("woff");font-weight:400;font-style:normal;font-display:swap;}@font-face{font-family:"AS Soelden";src:url("/content/resources/fonts/ASSoelden/ASSoelden-Bold.woff")format("woff");font-weight:700;font-style: normal;font-display:swap;}';
if ("requestIdleCallback" in window) {
	requestIdleCallback(() => {
		console.log("requestIdleCallback");
		document.head.append(fontStyleTag);
	});
} else {
	setTimeout(() => {
		document.head.append(fontStyleTag);
	}, 0);
}
