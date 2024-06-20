import { rimrafSync } from "rimraf";
import { logError, logStart, logSuccess } from "./logFunctions.js";
import { getCacheDir } from "./directory.js";

logStart();

const cacheDir = getCacheDir();

try {
	rimrafSync(cacheDir.absolute);
} catch (err) {
	logError(err instanceof Error ? err.message : null);
}

logSuccess(cacheDir.relative);

process.exit(0);
