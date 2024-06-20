<?php

declare(strict_types=1);

/**
 * Router class
 *
 * @property array $routes Holds all defined routes
 * @property array $currentRoute Holds information about current route
 * @property object $controller Controller corresponding to current route
 */
class Router {
	private static array $routes = [];
	private static array $currentRoute;
	private static object $controller;

	/**
	 * Router initialization method
	 *
	 * Calls controller initialization method
	 */
	public static function init(): void {
		self::initController();
	}

	/**
	 * Controller initialization method
	 *
	 * Sets controller property to instance of controller corresponding to current route
	 */
	private static function initController(): void {
		$req_uri = sanitize_uri(
			strpos($_SERVER['REQUEST_URI'], ROOT_PATH) === 0
				? substr_replace(
					$_SERVER['REQUEST_URI'],
					'',
					0,
					strlen(ROOT_PATH) + (ROOT_PATH !== '/' ? 1 : 0)
				)
				: $_SERVER['REQUEST_URI']
		);

		foreach (self::$routes as $route) {
			if ($route['uri'] === $req_uri) {
				self::$currentRoute = $route;

				if (ENV === 'production' && self::routeIsCached()) {
					echo file_get_contents(
						BASE_DIR .
							'/cache' .
							self::getCurrentRoute('uri') .
							'/index.html'
					);

					return;
				}

				ob_start();

				try {
					self::$controller = new ($route['controller_name'])();
				} catch (Throwable $e) {
					ob_end_clean();

					new ErrorController(
						$e->getCode() != null ? $e->getCode() : 500,
						$e
					);
				}

				$content = ob_get_contents();
				ob_end_flush();

				try {
					self::cacheOutput($content);
				} catch (Throwable $e) {
					return;
				}

				return;
			}
		}

		self::$controller = new ErrorController(404);
	}

	/**
	 * Route setter
	 *
	 * Adds new route to routes property
	 *
	 * @param string $uri Request URI for this route
	 * @param string $controller_name Name of controller handling this route
	 */
	public static function addRoute(
		string $uri,
		string $controller_name
	): void {
		self::$routes = array_merge(self::$routes, [
			[
				'uri' => sanitize_uri($uri),
				'controller_name' => $controller_name
			]
		]);
	}

	/**
	 * Current route getter
	 *
	 * Gets information about current route
	 *
	 * @param ?string $key Route information key to return
	 * @return string|array Value of route information key, full route information array if no key specified
	 */
	public static function getCurrentRoute(?string $key = null): string|array {
		return $key ? self::$currentRoute[$key] : self::$currentRoute;
	}

	/**
	 * Ouput caching method
	 *
	 * Creates the necessary directories and saves provided output to HTML file
	 *
	 * @param string $content HTML output to cache
	 */
	private static function cacheOutput(string $content) {
		if (ENV === 'development') {
			return;
		}

		$cache_uri = '/cache' . self::getCurrentRoute('uri');
		$cache_dir = BASE_DIR . $cache_uri;

		$cur_uri = '';
		foreach (explode('/', ltrim($cache_uri, '\/')) as $uri) {
			$cur_uri .= '/' . $uri;
			$cur_dir = BASE_DIR . $cur_uri;

			if (!file_exists($cur_dir) || !is_dir($cur_dir)) {
				mkdir($cur_dir);
			}
		}

		$minified_content = preg_replace(
			['/\s+/', '/>\s+</'],
			[' ', '><'],
			$content
		);

		$cache_file = fopen($cache_dir . '/index.html', 'w');
		fwrite($cache_file, $minified_content);
		fclose($cache_file);
	}

	/**
	 * Method to check if current Route is cached
	 *
	 * @return bool True, if current route is cached
	 */
	private static function routeIsCached(): bool {
		return file_exists(BASE_DIR . '/cache' . self::getCurrentRoute('uri'));
	}
}
