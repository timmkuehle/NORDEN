import colors from "colors";

const invalidDirAttrNote =
	"You have to specify an existing directory that contains image files to process.\nA correct script call looks like this: " +
	colors.yellow("node scripts/resources/index.js path/to/your/images");

const logNote = (message) => {
	console.log(colors.cyan(`Note: ${message}`));
};

export const logMissingDirAttrError = () => {
	console.log(colors.red("Error: Missing resources directory attribute\n"));

	logNote(`${invalidDirAttrNote}\n`);
};

export const logNonExistingDirError = () => {
	console.log(
		colors.red("Error: Specified resources directory does not exist\n")
	);

	logNote(`${invalidDirAttrNote}\n`);
};

export const logNoResourcesError = () => {
	console.log(
		colors.red(
			"Error: Specified resources directory does not contain any resources\n"
		)
	);

	logNote(`${invalidDirAttrNote}\n`);
};

export const logFileProcessing = (filepath) => {
	process.stdout.write(
		`Processing file ${colors.bold.cyan(`.${filepath}`)} ... `
	);
};

export const logImageVersionExists = (size) => {
	console.log(
		colors.yellow(
			`Image version of size ${colors.bold.cyan(size)} already exists`
		)
	);
};

export const logImageResize = (size) => {
	process.stdout.write(
		"Creating image version of size " + colors.bold.cyan(size) + " ... "
	);
};

export const logResizedImageSave = (outputPath) => {
	process.stdout.write(
		"Saving file " + colors.bold.cyan(`.${outputPath}`) + " ... "
	);
};

export const logError = (message) => {
	console.log(colors.red(`Error:\n${message}\n`));
};

export const logSuccess = () => {
	process.stdout.write(colors.bold.green("Success!\n"));
};
