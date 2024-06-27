import path from "path";
import { logMissingDirAttrError } from "./logFunctions.js";

/**
 * Gets cache directory from Node argument
 *
 * @param {string} relCacheDir Cache directory path, relative to project root
 */
export const getCacheDir = (relCacheDir) => {
	if (!relCacheDir) {
		logMissingDirAttrError();

		process.exit(1);
	}

	const dir = relCacheDir.replace(/^\.?\/?/, "/");
	const resDir = path.resolve(process.cwd() + dir);

	return { relative: `.${dir}`, absolute: resDir };
};
