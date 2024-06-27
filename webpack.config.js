import path from "path";
import { fileURLToPath } from "url";
import { glob } from "glob";
import MiniCssExtractPlugin from "mini-css-extract-plugin";
import { CleanWebpackPlugin } from "clean-webpack-plugin";
import getCommonConfig from "./scripts/getCommonConfig/index.js";
import setPHPEnv from "./scripts/setPHPEnv/index.js";
import HashOutputWebpackPlugin from "./scripts/hashOutputWebpackPlugin/index.js";

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
				"./content/pages/*/assets/src/scripts/page.@(js|ts)",
				"./content/pages/*/assets/src/styles/page.@(css|scss|sass)",
				"./content/projects/*/assets/src/scripts/project.@(js|ts)",
				"./content/projects/*/assets/src/styles/project.@(css|scss|sass)",
				"./content/error/assets/src/scripts/error.@(js|ts)",
				"./content/error/assets/src/styles/error.@(css|scss|sass)"
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
						{
							loader: "sass-loader",
							options: {
								additionalData: (content, loaderContext) => {
									const { resourcePath, rootContext } =
										loaderContext;
									const relativePath = path.relative(
										rootContext,
										resourcePath
									);

									if (
										relativePath !==
										"content/assets/src/styles/index.scss"
									) {
										return (
											'@import "@styles/index.scss";' +
											content
										);
									}

									return content;
								}
							}
						}
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
		resolve: {
			extensions: ["", ".js", ".ts", ".jsx", ".tsx"],
			alias: {
				"@scripts": path.resolve(
					__dirname,
					"content/assets/src/scripts"
				),
				"@constants": path.resolve(
					__dirname,
					"content/assets/src/scripts/constants"
				),
				"@styles": path.resolve(__dirname, "content/assets/src/styles"),
				"@fonts": path.resolve(__dirname, "content/resources/fonts"),
				"@components": path.resolve(__dirname, "components")
			}
		},
		output: {
			path: path.resolve(__dirname),
			filename: "[name].js"
		},
		plugins: [
			new MiniCssExtractPlugin({
				filename: (pathInfo) =>
					`${(pathInfo.chunk?.name || path.resolve(__dirname, "unresolved")).replace(/\.style$/, "")}.css`
			}),
			new CleanWebpackPlugin({
				protectWebpackAssets: false,
				cleanOnceBeforeBuildPatterns: [
					"./@(core|content)/**/assets/dist/*"
				],
				cleanAfterEveryBuildPatterns: [
					"./@(core|content)/**/assets/dist/*.style.@(js|js.map)",
					"./@(core|content)/**/assets/dist/*.js.LICENSE.txt"
				],
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
			hot: true,
			static: {
				directory: path.resolve(__dirname)
			}
		}
	};
};
