const path = require("path");
const { name } = require(path.resolve(__dirname, "..", "..", "package.json"));

module.exports = (filename) => {
	const defaultConfig = {
		webpackDevServer: {
			host: "localhost",
			subDir: `/${name}`,
			config: {
				type: "http"
			},
			port: 7890
		}
	};

	try {
		return {
			...defaultConfig,
			...require(path.resolve(__dirname, "..", "..", filename))
		};
	} catch (e) {
		return defaultConfig;
	}
};
