import colors from "colors";
import { writeFileSync } from "fs";

/**
 * Sets the current environment as named constant "ENV" in a PHP file
 *
 * @param {object} options Options
 * @param {"production" | "development"} options.env Current environment
 * @param {string} options.path PHP file directory
 * @param {string} options.filename Filename of generated PHP file
 */
export default ({ env, path, filename }) => {
	process.stdout.write(`<i> ${colors.green.bold("[php-env]")}`);

	try {
		writeFileSync(
			`${path}/${filename}`,
			`<?php\n\ndeclare(strict_types=1);\n\n/**\n * Global environment constant\n *\n * @var string ENV Represents webpack compiling mode ("production"|"development") \n */\ndefine('ENV', '${env}');\n`
		);

		process.stdout.write(
			` ${colors.green.bold("PHP environment constant set to")} ${colors.cyan.bold(env)}\n\n`
		);
	} catch (err) {
		process.stdout.write(
			`${colors.red.bold(" Failed to set PHP environment constant")}\n${colors.red(err instanceof Error ? err.message : "Unknown Error")}\n\n`
		);
	}
};
