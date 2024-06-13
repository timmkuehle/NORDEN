const path = require("path");
const fs = require("fs");
const colors = require("colors");

const writeFile = (fileContent, options, isDevServer = false) => {
	const { outputPath, outputFilename, outputFormat } = options;

	const filename =
		outputPath.replace(/\/$/, "") +
		"/" +
		outputFilename.replace(/\..*$/, "") +
		"." +
		outputFormat.toLowerCase();

	let hasOutput = false;

	if (!fs.existsSync(path.resolve(outputPath))) {
		process.stdout.write(
			`${isDevServer ? "\n" : ""}<i> ${colors.bold.green("[hash-output-webpack-plugin]")} Creating output directory '${colors.bold.cyan(outputPath)}' ... `
		);

		hasOutput = true;

		try {
			fs.mkdirSync(outputPath);
		} catch (err) {
			colors.bold.red("Failure:\n") + `${err.message}\n`;
		}

		process.stdout.write(colors.bold.green("Success\n"));
	}

	process.stdout.write(
		`${isDevServer && !hasOutput ? "\n" : ""}<i> ${colors.bold.green("[hash-output-webpack-plugin]")} Saving assets file to '${colors.bold.cyan(filename)}' ... `
	);

	try {
		fs.writeFileSync(filename, fileContent);
	} catch (err) {
		process.stdout.write(
			colors.bold.red("Failure:\n") + `${err.message}\n\n`
		);
	}

	process.stdout.write(colors.bold.green("Success\n\n"));
};

module.exports = {
	writeFile
};
