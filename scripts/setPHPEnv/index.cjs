const { writeFileSync } = require("fs");
const colors = require("colors");

module.exports = ({ env, path, filename }) => {
	process.stdout.write(`<i> ${colors.green.bold("[php-env]")}`);

	try {
		writeFileSync(
			`${path}/${filename}`,
			`<?php\n\ndeclare(strict_types=1);\n\n/**\n * Global environment constant\n *\n * @var string ENV Represents webpack compiling mode ("production"|"development") \n */\ndefine('ENV', '${env}');\n`
		);

		process.stdout.write(
			` ${colors.green.bold("PHP environment constant set to")} ${colors.cyan.bold(env)}\n\n`
		);
	} catch (e) {
		process.stdout.write(
			`${colors.red.bold(" Failed to set PHP environment constant")}\n${colors.red(e.message)}\n\n`
		);
	}
};
