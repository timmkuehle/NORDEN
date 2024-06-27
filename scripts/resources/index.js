import sharp from "sharp";
import { existsSync } from "fs";
import clearCache from "../clearCache/clearCache.js";
import { IMAGE_SIZES, OUTPUT_FORMAT } from "./constants.js";
import {
	logFileProcessing,
	logSuccess,
	logError,
	logImageResize,
	logImageVersionExists
} from "./logFunctions.js";
import { getFiles, saveResizedImage, getFilename } from "./fileHandling.js";

clearCache(process.argv[3]);

const files = getFiles();

(async () => {
	for (const file of files) {
		logFileProcessing(file.replace(process.cwd(), ""));

		let width;
		try {
			width = (await sharp(file).metadata()).width || 1920;

			logSuccess();
		} catch (err) {
			logError(`Unable to retrieve resource metadata: ${err}`);

			continue;
		}

		for (const [sizeName, newWidth] of Object.entries(IMAGE_SIZES)) {
			if (newWidth > width) {
				continue;
			}

			const newFilename = getFilename(file, newWidth.toString() + "w");

			if (existsSync(newFilename)) {
				logImageVersionExists(sizeName);

				continue;
			}

			logImageResize(sizeName);

			let resizedImage;
			try {
				resizedImage = sharp(file).resize({
					width: newWidth
				});

				logSuccess();
			} catch (err) {
				logError(
					err instanceof Error
						? err.message
						: "Unknown Error: Unable to resize image"
				);

				continue;
			}

			await saveResizedImage(resizedImage, newFilename, OUTPUT_FORMAT);
		}

		process.stdout.write("\n");
	}
})();
