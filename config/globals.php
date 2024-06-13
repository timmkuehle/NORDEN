<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/env.php';

/**
 * Global base directory constant
 *
 * @var string BASE_DIR Represents project root directory
 */
define('BASE_DIR', dirname(__FILE__, 2));

/**
 * Global package information constant
 *
 * @var array PACKAGE_INFO Represents contents of package_json
 */
define(
	'PACKAGE_INFO',
	file_exists(BASE_DIR . './package.json')
		? json_decode(file_get_contents(BASE_DIR . './package.json'), true)
		: []
);

/**
 * Global common configuration variable
 *
 * @var array|null PACKAGE_INFO Represents common configuration
 */
$GLOBALS['COMMON_CONFIG'] = null;

/**
 * Global root path constant
 *
 * @var string ROOT_PATH Project root path, prepended with forward slash: "/project/root/path"
 */
define('ROOT_PATH', get_root_path());

/**
 * Global base URL constant
 *
 * @var string BASE_URL Represents project root URL
 */
define(
	'BASE_URL',
	($_SERVER['HTTPS'] === 'on' ? 'https' : 'http') .
		'://' .
		$_SERVER['HTTP_HOST'] .
		sanitize_uri(ROOT_PATH, true)
);

/**
 * Global asset base URL constant
 *
 * @var string ASSET_BASE_URL Represents root URL for stylesheet and script linking
 */
define(
	'ASSET_BASE_URL',
	ENV === 'development'
		? get_common_config('webpackDevServer')['config']['type'] .
			'://' .
			get_common_config('webpackDevServer')['host'] .
			':' .
			get_common_config('webpackDevServer')['port'] .
			sanitize_uri(get_common_config('webpackDevServer')['subDir'], true)
		: BASE_URL
);

/**
 * Global current URL constant
 *
 * @var string CURRENT_URL Full current request URL
 */
define(
	'CURRENT_URL',
	(isset($_SERVER['HTTPS']) ? 'https' : 'http') .
		'://' .
		$_SERVER['HTTP_HOST'] .
		sanitize_uri($_SERVER['REQUEST_URI'], true)
);

/**
 * Global asset hashes constant
 *
 * @var array ASSET_HASHES Holds a list of all transpiled scripts and their coresponding SHA256 hashes
 */
define(
	'ASSET_HASHES',
	file_exists(
		$asset_hashes_path = BASE_DIR . '/content/assets/dist/assets.php'
	)
		? require $asset_hashes_path
		: []
);

/**
 * Global language code constant
 *
 * @var string LANG_CODE Language code for human readable text on site
 */
define('LANG_CODE', 'de');

/**
 * Global site title constant
 *
 * @var string SITE_TITLE Uppercase site title, derived from package name
 */
define(
	'SITE_TITLE',
	array_key_exists('name', PACKAGE_INFO)
		? strtoupper(PACKAGE_INFO['name'])
		: 'Untitled Project'
);

/**
 * Global site title constant
 *
 * @var string SITE_DESC General site description to use in meta tags
 */
define(
	'SITE_DESC',
	'Wir können Kommunikation, Markenentwicklung und Beratung - digital oder klassisch. Willkommen bei NORDEN, wo Ideen Wirklichkeit werden!'
);
