const crypto = require("crypto");

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
				crypto
					.createHash(algorithm)
					.update(assets[curAssetName].source())
					.digest("base64") +
				"',",
			"<?php\n\nreturn ["
		) + "\n];\n"
	);
};

const generateJSONFileContent = (assets, assetNames, algorithm) => {
	return JSON.stringify(
		assetNames.reduce(
			(acc, curAssetName) => ({
				...acc,
				[curAssetName]:
					algorithm.toLowerCase() +
					"-" +
					crypto
						.createHash(algorithm)
						.update(assets[curAssetName].source())
						.digest("base64")
			}),
			{}
		),
		null,
		2
	);
};

const generateFileContent = (assets, assetNames, fileFormat, algorithm) => {
	let fileContent;
	switch (fileFormat) {
		case "PHP":
		case "php":
		case "Php":
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

module.exports = {
	generateFileContent,
	generateJSONFileContent,
	generatePHPFileContent
};
