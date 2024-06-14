/** @type {import("prettier").Config} */
export default {
	useTabs: true,
	tabWidth: 4,
	singleQuote: false,
	trailingComma: "none",
	plugins: ["@prettier/plugin-php"],
	overrides: [
		{
			files: "*.php",
			options: {
				phpVersion: "8.2",
				braceStyle: "1tbs",
				singleQuote: true,
				trailingCommaPHP: false
			}
		},
		{
			files: "*.yml",
			options: {
				useTabs: false,
				tabWidth: 2
			}
		}
	]
};
