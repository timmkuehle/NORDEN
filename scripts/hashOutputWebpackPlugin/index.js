import { generateFileContent } from "./content.js";
import { writeFile } from "./files.js";

/** @typedef {{outputFormat: "json" | "php", outputPath: string, outputFilename: string, algorithm: "sha256" | "sha512" | "sha1" | "md5", emitOnSubsequentBuilds: boolean}} PluginOptions */

class HashOutputWebpackPlugin {
	/** @type {boolean} */
	static initialBuild;

	/** @type {PluginOptions} */
	static defaultOptions = {
		outputFormat: "json",
		outputPath: "./",
		outputFilename: "assets",
		algorithm: "sha256",
		emitOnSubsequentBuilds: false
	};

	/**
	 * Constructor method
	 *
	 * @param {object} options Plugin options
	 * @param {"json" | "php"} [options.outputFormat] File format of hash file
	 * @param {string} [options.outputPath] Hash file output directory
	 * @param {string} [options.outputFilename] Hash file output filename without filetype suffix
	 * @param {"sha256" | "sha512" | "sha1" | "md5"} [options.algorithm] Hashing algorithm to use
	 * @param {boolean} [options.emitOnSubsequentBuilds] If set to true, emits new hashfile for each "watch" or "devServer" build
	 */
	constructor(options = {}) {
		this.initialBuild = true;

		this.options = {
			...HashOutputWebpackPlugin.defaultOptions,
			...options
		};
	}

	/** @param {import('webpack').Compiler} compiler */
	apply(compiler) {
		compiler.hooks.emit.tapAsync(
			"HashOutputWebpackPlugin",
			(compilation, callback) => {
				if (
					(compiler.watchMode || process.argv.includes("serve")) &&
					!this.initialBuild &&
					!this.options.emitOnSubsequentBuilds
				) {
					return callback();
				}

				if (this.initialBuild) {
					this.initialBuild = false;
				}

				const assetNames = Object.keys(compilation.assets).filter(
					(name) => !/(\.css|\.style.js)/.test(name)
				);

				const fileContent = generateFileContent(
					compilation.assets,
					assetNames,
					this.options.outputFormat,
					this.options.algorithm
				);

				writeFile(fileContent, this.options);

				callback();
			}
		);
	}
}

export default HashOutputWebpackPlugin;
