<?php

declare(strict_types=1);

/**
 * Get project root path relative to HTTP host
 *
 * @return string Project root path, prepended with forward slash: "/project/root/path"
 */
function get_root_path(): string {
	return sanitize_uri(
		str_replace(
			str_replace(
				dirname(__FILE__, 2),
				'',
				realpath($_SERVER['SCRIPT_FILENAME'])
			),
			'',
			$_SERVER['SCRIPT_NAME']
		),
		true
	);
}
