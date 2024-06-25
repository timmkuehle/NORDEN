import { resolve } from "path";
import { existsSync, mkdirSync, writeFileSync } from "fs";
import colors from "colors";

/** @typedef {{outputFormat: "json" | "php", outputPath: string, outputFilename: string, algorithm: string, emitOnSubsequentBuilds: boolean}} PluginOptions */

/**
 * Writes hashes to file
 *
 * @param {string} fileContent String to write to file
 * @param {PluginOptions} options HashOutputWebpackPlugin options
 */
export const writeFile = (fileContent, options) => {
	const { outputPath, outputFilename, outputFormat } = options;

	const filename =
		outputPath.replace(/\/$/, "") +
		"/" +
		outputFilename.replace(/\..*$/, "") +
		"." +
		outputFormat.toLowerCase();

	let hasOutput = false;

	if (!existsSync(resolve(outputPath))) {
		process.stdout.write(
			`\n<i> ` +
				colors.bold.green("[hash-output-webpack-plugin]") +
				` Creating output directory '${colors.bold.cyan(outputPath)}' ... `
		);

		hasOutput = true;

		try {
			mkdirSync(outputPath);
		} catch (err) {
			colors.bold.red("Failure:\n") +
				`${err instanceof Error ? err.message : "Unknown Error"}\n`;
		}

		process.stdout.write(colors.bold.green("Success\n"));
	}

	process.stdout.write(
		`${!hasOutput ? "\n" : ""}<i> ` +
			colors.bold.green("[hash-output-webpack-plugin]") +
			` Saving assets file to ${colors.bold.cyan(filename)} ... `
	);

	try {
		writeFileSync(filename, fileContent);
	} catch (err) {
		process.stdout.write(
			colors.bold.red("Failure:\n") +
				`${err instanceof Error ? err.message : "Unknown Error"}\n\n`
		);
	}

	process.stdout.write(colors.bold.green("Success\n\n"));
};
