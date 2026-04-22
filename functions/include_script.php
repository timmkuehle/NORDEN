<?php

declare(strict_types=1);

/**
 * Render HTML script tag
 *
 * @param string $name Unique script identifier, will be prepended with "-script" to form script tag id attribute
 * @param string $path Path to script file, relative to root URL
 * @param string $hash Hash of script file to ensure its integrity
 * @param ?boolean $defer If set to false, "defer" attribute is omitted from script tag
 */
function include_script(
	string $handle,
	string $path,
	string $hash,
	bool $defer = true
): void {
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

	// In production we want SRI, but the value must match the deployed file.
	// If `content/assets/dist/assets.php` is stale (e.g. opcache), browsers will block execution.
	// So we compute integrity from the actual file on disk.
	$integrity =
		ENV === 'production'
			? 'integrity="sha384-' .
				base64_encode(hash_file('sha384', $file_path, true)) .
				'" crossorigin="anonymous"'
			: '';
	?>
        <script id="<?php echo $id; ?>" src="<?php echo $src; ?>" <?php echo $integrity .
	($defer ? ' defer' : ''); ?>></script>
    <?php
}
