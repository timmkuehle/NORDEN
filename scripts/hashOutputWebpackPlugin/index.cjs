const { generateFileContent } = require("./content.cjs");
const { writeFile } = require("./files.cjs");

class HashOutputWebpackPlugin {
	static initialBuild;

	static defaultOptions = {
		outputFormat: "json",
		outputPath: "./",
		outputFilename: "assets",
		algorithm: "sha256",
		emitOnSubsequentBuilds: false
	};

	constructor(options = {}) {
		this.initialBuild = true;

		this.options = {
			...HashOutputWebpackPlugin.defaultOptions,
			...options
		};
	}

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

				writeFile(
					fileContent,
					this.options,
					process.argv.includes("serve")
				);

				callback();
			}
		);
	}
}

module.exports = HashOutputWebpackPlugin;
