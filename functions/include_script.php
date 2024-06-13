<?php

declare(strict_types=1);

/**
 * Render HTML script tag
 *
 * @param string $name Unique script identifier, will be prepended with "-script" to form script tag id attribute
 * @param string $path Path to script file, relative to root URL
 * @param string $hash Hash of script file to ensure its integrity
 */
function include_script(string $handle, string $path, string $hash): void {
	$sanitized_path = sanitize_uri($path);
	$dev_path = preg_replace(
		['/\/dist/', '/\.bundle\.js/'],
		['/src/scripts', '.[jt]s'],
		$sanitized_path
	);

	if (
		!file_exists($file_path = BASE_DIR . $sanitized_path) &&
		!(ENV === 'development' && !empty(glob(BASE_DIR . $dev_path)))
	) {
		return;
	}

	$id = $handle . '-script';
	$src =
		ASSET_BASE_URL .
		$sanitized_path .
		(ENV === 'production' ? '?ver=' . hash_file('md4', $file_path) : '');

	$integrity = ENV === 'production' ? 'integrity="' . $hash . '"' : '';
	?>
        <script id="<?php echo $id; ?>" src="<?php echo $src; ?>" <?php echo $integrity; ?>></script>
    <?php
}
