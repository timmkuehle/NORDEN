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

				echo ob_get_clean();

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
}
