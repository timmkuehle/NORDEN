import path from "path";
import { existsSync } from "fs";
import { logAlreadyCleared, logMissingDirAttrError } from "./logFunctions.js";

/**
 * Gets cache directory from Node argument
 */
export const getCacheDir = () => {
	if (process.argv.length < 3) {
		logMissingDirAttrError();

		process.exit(1);
	}

	const dir = process.argv[2].replace(/^\.?\/?/, "/");
	const resDir = path.resolve(process.cwd() + dir);

	if (!existsSync(resDir)) {
		logAlreadyCleared(`.${dir}`);

		process.exit(1);
	}

	return { relative: `.${dir}`, absolute: resDir };
};
