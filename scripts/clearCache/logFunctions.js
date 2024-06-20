import colors from "colors";

/** Logs start of cache clearing process */
export const logStart = () => {
	process.stdout.write("Clearing cached resources ... ");
};

/**
 * Logs success message
 *
 * @param {string} dir Cache directory
 */
export const logSuccess = (dir) => {
	console.log(
		colors.green(
			`${colors.bold("Success")}\nRemoved cache directory ${colors.cyan.bold(dir)}\n`
		)
	);
};

/**
 * Logs an error with an optinal message
 *
 * @param {?string} message Error message
 */
export const logError = (message) => {
	console.log(
		colors.red(`${colors.bold("Error!")}\n${message ? `${message}\n` : ""}`)
	);
};

/** Logs error for missing cache directoy attribute in script call */
export const logMissingDirAttrError = () => {
	console.log(
		colors.red(
			`${colors.bold("Error!")}\nMissing resources directory attribute\n`
		)
	);
};

/**
 * Logs message for non existing cache directory
 *
 * @param {string} dir Cache directory
 */
export const logAlreadyCleared = (dir) => {
	console.log(
		colors.yellow(
			`${colors.bold("Already cleared.")}\nDirectory ${colors.cyan.bold(dir)} does not exist\n`
		)
	);
};
