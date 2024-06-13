<?php

declare(strict_types=1);

/**
 * Get common configuration for PHP and JS
 *
 * @param string|null $key Configuration key to return
 * @return string|int|bool|array Value of configuration key, full configuration array if no key specified
 */
function get_common_config(?string $key = null): string|int|bool|array {
	if ($GLOBALS['COMMON_CONFIG']) {
		$common_config = $GLOBALS['COMMON_CONFIG'];
	} else {
		$default_config = [
			'webpackDevServer' => [
				'host' => 'localhost',
				'subDir' => PACKAGE_INFO['name'],
				'config' => [
					'type' => 'http'
				],
				'port' => 7890
			]
		];

		try {
			$common_config = array_merge(
				$default_config,
				json_decode(
					file_get_contents(BASE_DIR . '/common.config.json'),
					true
				)
			);
		} catch (Throwable $e) {
			$common_config = $default_config;
		}

		$GLOBALS['COMMON_CONFIG'] = $common_config;
	}

	return $key ? $common_config[$key] : $common_config;
}
