<?php

declare(strict_types=1);

/**
 * Minify HTML content
 *
 * @param string $html HTML content to minify
 * @param bool $inline_styles If set to false, local stylesheets will not be inlined in HTML <style> tags
 * @return string Minified HTML content
 */
function minify_html(string $html, bool $inline_styles = true): string {
	$minified_html = preg_replace(['/\s+/', '/>\s+</'], [' ', '><'], $html);

	return $inline_styles
		? preg_replace_callback(
			'/<link\s+id="[^"]+"\srel="stylesheet"[^>]*href="([^"]+)"[^>]*>/',
			function ($link_tag) {
				$css_file = str_replace(
					BASE_URL,
					BASE_DIR,
					preg_replace('/\?ver=.*$/', '', $link_tag[1])
				);

				if (!file_exists($css_file)) {
					return $link_tag[0];
				}

				$style_tag = '';
				try {
					$style_tag =
						'<style>' . file_get_contents($css_file) . '</style>';
				} catch (Throwable $e) {
					return $link_tag[0];
				}

				return $style_tag;
			},
			$minified_html
		)
		: $minified_html;
}
