<?php

declare(strict_types=1);

/**
 * Sanitizes URI string
 *
 * Prepends forward slash and removes trailing slashes
 *
 * @param string $uri URI string to sanitize
 * @param bool $noSlashIfEmpty If set to true, no forward slash is prepended to empty string
 * @return string Sanitized URI string
 */
function sanitize_uri(string $uri, ?bool $noSlashIfEmpty = false): string {
	$patterns = ['/(\/|\\\)*$/'];

	if (!preg_match('/^https?\:\/\//', $uri)) {
		array_push(
			$patterns,
			$noSlashIfEmpty ? '/^(\/|\\\)*(?=.)/' : '/^(\/|\\\)*/'
		);
	}

	return str_starts_with($uri, '#')
		? $uri
		: preg_replace($patterns, ['', '/'], $uri);
}
