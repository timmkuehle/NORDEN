import { createHash } from "crypto";

/** @typedef {import('webpack').Compilation['assets']} WebpackCompilationAssets */

/**
 * Generates PHP file content
 *
 * @param {WebpackCompilationAssets} assets Webpack assets
 * @param {string[]} assetNames Webpack asset names
 * @param {"sha256" | "sha512" | "sha1" | "md5"} algorithm Hashing algorithm to use
 */
const generatePHPFileContent = (assets, assetNames, algorithm) => {
	return (
		assetNames.reduce(
			(acc, curAssetName) =>
				acc +
				"\n\t'" +
				curAssetName +
				"' =>\n\t\t'" +
				algorithm.toLowerCase() +
				"-" +
				createHash(algorithm)
					.update(assets[curAssetName].source())
					.digest("base64") +
				"',",
			"<?php\n\nreturn ["
		) + "\n];\n"
	);
};

/**
 * Generates JSON file content
 *
 * @param {WebpackCompilationAssets} assets Webpack assets
 * @param {string[]} assetNames Webpack asset names
 * @param {"sha256" | "sha512" | "sha1" | "md5"} algorithm Hashing algorithm to use
 */
const generateJSONFileContent = (assets, assetNames, algorithm) => {
	return JSON.stringify(
		assetNames.reduce(
			(acc, curAssetName) => ({
				...acc,
				[curAssetName]:
					algorithm.toLowerCase() +
					"-" +
					createHash(algorithm)
						.update(assets[curAssetName].source())
						.digest("base64")
			}),
			{}
		),
		null,
		2
	);
};

/**
 * Generates file content
 *
 * @param {WebpackCompilationAssets} assets Webpack assets
 * @param {string[]} assetNames Webpack asset names
 * @param {"json" | "php"} fileFormat File format of hash file
 * @param {"sha256" | "sha512" | "sha1" | "md5"} algorithm Hashing algorithm to use
 */
export const generateFileContent = (
	assets,
	assetNames,
	fileFormat,
	algorithm
) => {
	let fileContent;
	switch (fileFormat) {
		case "php":
			fileContent = generatePHPFileContent(assets, assetNames, algorithm);
			break;
		default:
			fileContent = generateJSONFileContent(
				assets,
				assetNames,
				algorithm
			);
	}

	return fileContent;
};
