import sharp from "sharp";
import { existsSync } from "fs";
import { IMAGE_SIZES, OUTPUT_FORMAT } from "./constants.js";
import {
	logFileProcessing,
	logSuccess,
	logError,
	logImageResize,
	logImageVersionExists
} from "./logFunctions.js";
import { getFiles, saveResizedImage, getFilename } from "./fileHandling.js";

const files = getFiles();

(async () => {
	for (const file of files) {
		logFileProcessing(file.replace(process.cwd(), ""));

		let width;
		try {
			width = (await sharp(file).metadata()).width;

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
				logError(err.message);

				continue;
			}

			await saveResizedImage(resizedImage, newFilename, OUTPUT_FORMAT);
		}

		process.stdout.write("\n");
	}
})();
