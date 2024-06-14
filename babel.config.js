/** @type {(api: import('@babel/core').ConfigAPI) => {presets?: string[], plugins?: string[]}} */
export default (api) => {
	api.cache(true);

	return {
		presets: ["@babel/preset-env", "@babel/preset-typescript"]
	};
};
