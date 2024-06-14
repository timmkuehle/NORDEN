import path from "path";
import { fileURLToPath } from "url";
import { readFileSync } from "fs";

/**
 * Parse and return content of JSON files
 *
 * @param {string} relativePath Path to JSON file, relative to current directory
 */
const parseJsonFile = (relativePath) => {
	const __dirname = path.dirname(fileURLToPath(import.meta.url));

	return JSON.parse(
		readFileSync(path.resolve(__dirname, relativePath), "utf-8")
	);
};

/**
 * Parses common config file and returns its content as an object
 *
 * @typedef {{webpackDevServer: {host: string, subDir: string, config: {type: "http" | "https"}, port: number}}} CommonConfig
 *
 * @param {string} path Path to common config file, relative to webpack config file
 * @returns {CommonConfig}
 */
export default (path) => {
	/** @type {CommonConfig} */
	const defaultConfig = {
		webpackDevServer: {
			host: "localhost",
			subDir: `/${parseJsonFile("../../package.json").name}`,
			config: {
				type: "http"
			},
			port: 7890
		}
	};

	try {
		return {
			...defaultConfig,
			...parseJsonFile(`../../${path}`)
		};
	} catch (err) {
		return defaultConfig;
	}
};
