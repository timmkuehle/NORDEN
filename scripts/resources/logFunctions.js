import colors from "colors";

const invalidDirAttrNote =
	"You have to specify an existing directory that contains image files to process.\nA correct script call looks like this: " +
	colors.yellow("node scripts/resources/index.js path/to/your/images");

/**
 * Logs note
 *
 * @param {string} message Note to be logged
 */
const logNote = (message) => {
	console.log(colors.cyan(`Note: ${message}`));
};

/** Logs error for missing resource directoy attribute in script call */
export const logMissingDirAttrError = () => {
	console.log(colors.red("Error: Missing resources directory attribute\n"));

	logNote(`${invalidDirAttrNote}\n`);
};

/** Logs error for non existing resource directoy */
export const logNonExistingDirError = () => {
	console.log(
		colors.red("Error: Specified resources directory does not exist\n")
	);

	logNote(`${invalidDirAttrNote}\n`);
};

/** Logs error for resource directoy without any resource files */
export const logNoResourcesError = () => {
	console.log(
		colors.red(
			"Error: Specified resources directory does not contain any resources\n"
		)
	);

	logNote(`${invalidDirAttrNote}\n`);
};

/**
 * Logs processing of individual file
 *
 * @param {string} filepath Path to processed file
 */
export const logFileProcessing = (filepath) => {
	process.stdout.write(
		`Processing file ${colors.bold.cyan(`.${filepath}`)} ... `
	);
};

/**
 * Logs message about already existing image version of specified size
 *
 * @param {string} size Specified image size name
 */
export const logImageVersionExists = (size) => {
	console.log(
		colors.yellow(
			`Image version of size ${colors.bold.cyan(size)} already exists`
		)
	);
};

/**
 * Logs resizing of individual image to specified size
 *
 * @param {string} size Specified image size name
 */
export const logImageResize = (size) => {
	process.stdout.write(
		"Creating image version of size " + colors.bold.cyan(size) + " ... "
	);
};

/**
 * Logs saving of individual image to specified path
 *
 * @param {string} outputPath Path of saved image
 */
export const logResizedImageSave = (outputPath) => {
	process.stdout.write(
		"Saving file " + colors.bold.cyan(`.${outputPath}`) + " ... "
	);
};

/**
 * Logs error
 *
 * @param {string} message Error to be logged
 */
export const logError = (message) => {
	console.log(colors.red(`Error:\n${message}\n`));
};

/** Logs success message */
export const logSuccess = () => {
	process.stdout.write(colors.bold.green("Success!\n"));
};
