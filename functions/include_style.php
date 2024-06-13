<?php

declare(strict_types=1);

/**
 * Render HTML script tag
 *
 * @param string $name Unique script identifier, will be prepended with "-script" to form script tag id attribute
 * @param string $path Path to script file, relative to root URL
 */
function include_style(string $handle, string $path): void {
	$sanitized_path = sanitize_uri($path);
	$dev_path = preg_replace(
		['/\/dist/', '/\.css/'],
		['/src/styles', '.*[ac]ss'],
		$sanitized_path
	);

	if (
		!file_exists($file_path = BASE_DIR . $sanitized_path) &&
		!(ENV === 'development' && !empty(glob(BASE_DIR . $dev_path)))
	) {
		return;
	}

	$id = $handle . '-style';
	$href =
		ASSET_BASE_URL .
		$sanitized_path .
		(ENV === 'production' ? '?ver=' . hash_file('md4', $file_path) : '');
	?>
        <link id="<?php echo $id; ?>" rel="stylesheet" href="<?php echo $href; ?>">
    <?php
}
