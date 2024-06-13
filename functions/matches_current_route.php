<?php

declare(strict_types=1);

/**
 * Check if provided uri matches current route
 *
 * @param string uri URI to check, relative to base URL
 * @return bool True if provided URI matches current route, otherwise false
 */
function matches_current_route(string $uri): bool {
	return Router::getCurrentRoute('uri') === sanitize_uri($uri);
}
