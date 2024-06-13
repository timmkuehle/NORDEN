<?php

declare(strict_types=1);

/**
 * Include all libraries from "libs" directory
 */
function include_libs() {
	foreach (glob(BASE_DIR . '/libs/**') as $lib_dir) {
		if (file_exists($index_dir = $lib_dir . '/index.php')) {
			require $index_dir;
		}
	}
}
