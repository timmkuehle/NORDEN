export const setRelativeBaseDir = () => {
	window.location.relativeBaseDir =
		(
			document.querySelector(
				'meta[name="relativeBaseDir"]'
			) as HTMLMetaElement
		)?.content || "/";
};
