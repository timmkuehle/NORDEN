import path from "path";
import { glob } from "glob";
import MiniCssExtractPlugin from "mini-css-extract-plugin";
import getCommonConfig from "./scripts/getCommonConfig/index.js";
import setPHPEnv from "./scripts/setPHPEnv/index.js";
import HashOutputWebpackPlugin from "./scripts/hashOutputWebpackPlugin/index.js";
import { fileURLToPath } from "url";

/**
 * @typedef {import('webpack').Configuration} WebpackConfiguration
 * @typedef {import('webpack-dev-server').Configuration} WebpackDevServerConfiguration
 * @typedef {WebpackConfiguration & {devServer?: WebpackConfiguration}} WebpackConfigurationWithDevServer
 * @typedef {WebpackConfigurationWithDevServer | WebpackConfigurationWithDevServer[]} FullWebpackConfiguration
 */

const __dirname = path.dirname(fileURLToPath(import.meta.url));

/** @type {(env: any, argv: any) => FullWebpackConfiguration} */
export default (env, argv) => {
	const { mode } = argv;
	const isProduction = mode === "production";
	const devtool = isProduction ? false : "source-map";
	const {
		host: devServerHost,
		subDir: devServerSubDir,
		config: devServerConfig,
		port: devServerPort
	} = getCommonConfig("common.config.json").webpackDevServer;

	console.log(devServerConfig);

	const proxy = [
		{
			context: "*",
			target: `${devServerConfig.type}://${devServerHost + devServerSubDir.replace(/^\/{0,1}(?=.)/, "/")}`
		}
	];
	setPHPEnv({
		env: mode,
		path: path.resolve(".", "config"),
		filename: "env.php"
	});

	return {
		mode,
		devtool,
		/** @type {{[name: string]: string}} */
		entry: glob
			.sync([
				"./content/assets/src/scripts/index.@(js|ts)",
				"./content/assets/src/styles/index.@(css|scss|sass)",
				"./content/*/*/assets/src/scripts/page.@(js|ts)",
				"./content/*/*/assets/src/styles/page.@(css|scss|sass)",
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
				return { ...entry, [name]: `./${filePath}` };
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
			filename: "[name].js",
			clean: { dry: true }
		},
		plugins: [
			new MiniCssExtractPlugin({
				filename: (pathInfo) =>
					`${(pathInfo.chunk?.name || path.resolve(__dirname, "unresolved")).replace(/\.style$/, "")}.css`
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
			hot: true,
			static: {
				directory: path.resolve(__dirname)
			}
		}
	};
};
