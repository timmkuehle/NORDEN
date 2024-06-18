import path from "path";
import { existsSync } from "fs";
import { globSync } from "glob";
import { OUTPUT_FORMAT, OUTPUT_QUALITY } from "./constants.js";
import {
	logMissingDirAttrError,
	logNonExistingDirError,
	logNoResourcesError,
	logSuccess,
	logError,
	logResizedImageSave
} from "./logFunctions.js";

export const getFiles = () => {
	if (process.argv.length < 3) {
		logMissingDirAttrError();

		process.exit(1);
	}

	const resDir = path.resolve(
		process.cwd() + process.argv[2].replace(/^\./, "").replace(/^\/*/, "/")
	);

	if (!existsSync(resDir)) {
		logNonExistingDirError();

		process.exit(1);
	}

	const files = (
		globSync(path.resolve(resDir + "/**/*.@(jpg|jpeg|png)")) || []
	).filter((file) => !/_[0-9]{2,}(h|w).(jpe?g|png|webp)$/.test(file));

	if (!files.length) {
		logNoResourcesError();

		process.exit(1);
	}

	return files;
};

export const getFilename = (originalFilename, size) => {
	const fileExt = path.parse(originalFilename).ext;

	return originalFilename.replace(
		new RegExp(fileExt + "$"),
		`_${size}.${OUTPUT_FORMAT}`
	);
};

export const saveResizedImage = async (resizedImage, outputPath, format) => {
	logResizedImageSave(outputPath.replace(process.cwd(), ""));

	return new Promise((resolve, reject) => {
		resizedImage
			.toFormat(format, { quality: OUTPUT_QUALITY })
			.toFile(outputPath, (err, info) => {
				if (err) {
					logError(err.message);

					reject(err);
				}

				logSuccess();

				resolve(info);
			});
	});
};
