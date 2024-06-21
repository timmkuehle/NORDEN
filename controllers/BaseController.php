<?php

declare(strict_types=1);

/**
 * Base controller class
 *
 * @property string $contentPath Path to page content directory, relative to project root
 */
class BaseController {
	protected string $contentPath;

	/**
	 * Get HTTP headers method
	 *
	 * @return array Array of HTTP headers and their corresponding values
	 */
	protected function getHttpHeaders(): array {
		$headers =
			ENV === 'production'
				? [
					'Content-Security-Policy' =>
						'script-src ' .
						$this->getScriptHashes() .
						"; object-src 'none'"
				]
				: [];

		return $headers;
	}

	/**
	 * Get script hashes string
	 *
	 * @return string Hashes of all used scripts, enclosed in single quotes
	 */
	private function getScriptHashes() {
		$scripts = $this->getScripts();

		if (empty($scripts)) {
			return "'self'";
		}

		return "'" .
			implode(
				"' '",
				array_map(fn($script) => $script['hash'], $scripts)
			) .
			"'";
	}

	/**
	 * Get scripts method
	 *
	 * @return array Array of scripts information (directory and content hash)
	 */
	protected function getScripts(): array {
		$scripts = [];

		$script_paths = [
			'site' => '/content/assets/dist/index.bundle.js',
			'page' => $this->contentPath . '/assets/dist/page.bundle.js',
			'project' => $this->contentPath . '/assets/dist/project.bundle.js',
			'error' => $this->contentPath . '/assets/dist/error.bundle.js'
		];

		foreach ($script_paths as $handle => $path) {
			$dir_comps = explode('/dist/', $path);
			$src_dir = BASE_DIR . sanitize_uri($dir_comps[0]) . '/src/scripts/';
			$filename = str_replace('.bundle.js', '', $dir_comps[1]);
			$src_file_js = $src_dir . $filename . '.js';
			$src_file_ts = $src_dir . $filename . '.ts';

			$sanitized_path = preg_replace('/^\//', '', $path);

			if (
				ENV === 'development' &&
				file_exists(BASE_DIR . $path) &&
				!(file_exists($src_file_js) || file_exists($src_file_ts)) &&
				get_called_class() !== 'ErrorController'
			) {
				throw new Error(
					'Stray Bundle File: [' .
						$sanitized_path .
						'] is missing corresponding source file at [' .
						str_replace(BASE_DIR . '/', '', $src_dir) .
						']: This will throw an error in production environment, because webpack cannot generate the necessary content hash',
					500
				);
			}

			if (
				(ENV === 'development' &&
					(file_exists($src_file_js) || file_exists($src_file_ts))) ||
				(ENV === 'production' && file_exists(BASE_DIR . $path))
			) {
				if (!array_key_exists($sanitized_path, ASSET_HASHES)) {
					if (get_called_class() !== 'ErrorController') {
						throw new Error(
							'Could not find content hash for script [' .
								$sanitized_path .
								'] in asset asset file [content/assets/dist/assets.php]',
							500
						);
					}

					continue;
				}

				$scripts[$handle] = [
					'src' => $path,
					'hash' => ASSET_HASHES[$sanitized_path]
				];
			}
		}

		return $scripts;
	}

	/**
	 * Get stylesheet paths method
	 *
	 * @param string $filename Stylesheet filename convention without filetype extension
	 * @return array Stylesheet paths, relative to base URL
	 */
	protected function getStyles(string $filename): array {
		$styles = [];

		if (
			!empty(
				glob(
					BASE_DIR .
						$this->contentPath .
						'/assets/src/styles/' .
						$filename .
						'.*[ac]ss'
				)
			) ||
			(ENV === 'production' &&
				file_exists(
					BASE_DIR .
						$this->contentPath .
						'/assets/dist/' .
						$filename .
						'.css'
				))
		) {
			$styles[$filename] =
				$this->contentPath . '/assets/dist/' . $filename . '.css';
		}

		return $styles;
	}
}
