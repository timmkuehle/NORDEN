const path = require("path");
const glob = require("glob");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const getCommonConfig = require("./scripts/getCommonConfig");
const setPHPEnv = require("./scripts/setPHPEnv");
const HashOutputWebpackPlugin = require("./scripts/hashOutputWebpackPlugin");

module.exports = (env, argv) => {
	const { mode } = argv;
	const isProduction = mode === "production";
	const devtool = isProduction ? false : "source-map";
	const cleanPatterns = isProduction
		? ["./@(core|content)/**/assets/dist/*.@(style.js|map)"]
		: ["./@(core|content)/**/assets/dist/*.style.@(js|js.map)"];
	const {
		host: devServerHost,
		subDir: devServerSubDir,
		config: devServerConfig,
		port: devServerPort
	} = (webpackDevServer =
		getCommonConfig("common.config.json").webpackDevServer);
	const proxy = {
		"*": `${devServerConfig.type}://${devServerHost + devServerSubDir.replace(/^\/{0,1}(?=.)/, "/")}`
	};

	setPHPEnv({
		env: mode,
		path: path.resolve(".", "config"),
		filename: "env.php"
	});

	return {
		mode,
		devtool,
		entry: glob
			.sync([
				"./content/assets/src/scripts/index.@(js|ts)",
				"./content/assets/src/styles/index.@(css|scss|sass)",
				"./content/pages/*/assets/src/scripts/page.@(js|ts)",
				"./content/pages/*/assets/src/styles/page.@(css|scss|sass)",
				"./content/projects/*/assets/src/scripts/project.@(js|ts)",
				"./content/projects/*/assets/src/styles/project.@(css|scss|sass)",
				"./core/error/assets/src/scripts/error.@(js|ts)",
				"./core/error/assets/src/styles/error.@(css|scss|sass)"
			])
			.reduce((entry, filePath) => {
				const filePathArray = filePath.split(/[/.]/);
				const name =
					filePathArray.slice(0, -4).join("/") +
					"/dist/" +
					filePathArray.slice(-2)[0] +
					(/s{0,1}(c|a)ss$/.test(filePathArray.slice(-1)[0])
						? ".style"
						: ".bundle");
				entry[name] = `./${filePath}`;
				return entry;
			}, {}),
		module: {
			rules: [
				{
					test: /\.(j|t)s$/,
					exclude: /node_modules/,
					use: ["babel-loader"]
				},
				{
					test: /\.s{0,1}(a|c)ss$/,
					exclude: /node_modules/,
					use: [
						MiniCssExtractPlugin.loader,
						"css-loader",
						"sass-loader"
					]
				},
				{
					test: /\.(woff(2)?|ttf|otf|eot|svg|png)(\?v=\d+(\.\d)*)?$/,
					include: path.resolve(__dirname, "content/resources"),
					exclude: /node_modules/,
					type: "asset/resource",
					generator: {
						filename: "[path][name][ext]",
						emit: false
					}
				}
			]
		},
		resolve: { extensions: ["", ".js", ".ts", ".jsx", ".tsx"] },
		output: {
			path: path.resolve(__dirname),
			filename: "[name].js"
		},
		plugins: [
			new MiniCssExtractPlugin({
				filename: (pathInfo) =>
					`${pathInfo.chunk.name.replace(/\.style$/, "")}.css`
			}),
			new CleanWebpackPlugin({
				protectWebpackAssets: false,
				cleanOnceBeforeBuildPatterns: cleanPatterns,
				cleanAfterEveryBuildPatterns: cleanPatterns,
				verbose: isProduction
			}),
			new HashOutputWebpackPlugin({
				outputFormat: "php",
				outputPath: "./content/assets/dist"
			})
		],
		devServer: {
			host: devServerHost,
			port: devServerPort,
			server: devServerConfig,
			headers: {
				"Access-Control-Allow-Origin": "*"
			},
			proxy,
			watchFiles: ["**/*.php", "**/*.@(css|scss|sass)"],
			hot: true
		}
	};
};
