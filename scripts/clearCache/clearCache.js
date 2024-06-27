import { existsSync } from "fs";
import { rimrafSync } from "rimraf";
import { getCacheDir } from "./directory.js";
import {
	logAlreadyCleared,
	logError,
	logStart,
	logSuccess
} from "./logFunctions.js";

/**
 * Removes specified cache directory
 *
 * @param {string} relCacheDir Cache directory path, relative to project root
 */
const clearCache = (relCacheDir) => {
	logStart();

	const cacheDir = getCacheDir(relCacheDir);

	if (!existsSync(cacheDir.absolute)) {
		logAlreadyCleared(cacheDir.relative);

		return;
	}

	try {
		rimrafSync(cacheDir.absolute);
	} catch (err) {
		logError(err instanceof Error ? err.message : null);

		process.exit(1);
	}

	logSuccess(cacheDir.relative);
};

export default clearCache;
