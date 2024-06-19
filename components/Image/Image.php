<?php

declare(strict_types=1);

/**
 * Image component
 *
 * Renders image using provided props
 */
class Image extends PHTMLComponent {
	private string $src;
	private ?string $alt;
	private bool $lazyLoaded;
	private ?string $mobileSrc;
	private int $breakpoint;

	public function __construct(
		?string $id,
		?string $class_name,
		string $src,
		string $alt = null,
		bool $lazy_loaded = false,
		string $mobile_src = null,
		int $breakpoint = 768
	) {
		$this->src = sanitize_uri($src);

		if (!file_exists(BASE_DIR . $this->src)) {
			return;
		}

		$this->alt = $alt;

		$this->lazyLoaded = $lazy_loaded;

		$this->mobileSrc = $mobile_src ? sanitize_uri($mobile_src) : null;

		$this->breakpoint = $breakpoint;

		parent::__construct($id, $class_name . ($lazy_loaded ? ' lazy' : ''));
	}

	private function getSrcAttribute(): string {
		return ($this->lazyLoaded ? 'data-src' : 'src') .
			'="' .
			BASE_URL .
			$this->src .
			'"';
	}

	private function getSrcset(
		string $path,
		float $max_size = null,
		float $min_size = 0
	) {
		$path_parts = pathinfo($path);

		return array_filter(
			array_filter(
				glob(
					$path_parts['dirname'] .
						'/' .
						$path_parts['filename'] .
						'_{[0-9][0-9],[0-9][0-9][0-9],[0-9][0-9][0-9][0-9]}[wh].*',
					GLOB_BRACE
				) ?? [],
				fn($file) => $max_size
					? (preg_match(
						'/[0-9]{2,}(?=(w|h)\.\w{2,}$)/',
						$file,
						$matches
					)
						? (int) $matches[0] <= $max_size
						: false)
					: true
			),
			fn($file) => $min_size
				? (preg_match('/[0-9]{2,}(?=(w|h)\.\w{2,}$)/', $file, $matches)
					? (int) $matches[0] > $min_size
					: false)
				: true
		);
	}

	private function getSrcsetAttribute() {
		$mobile_srcset = $this->mobileSrc
			? $this->getSrcset(
				BASE_DIR . $this->mobileSrc,
				$this->breakpoint * 1.75
			)
			: [];

		$srcset_string =
			($this->lazyLoaded ? 'data-srcset' : 'srcset') .
			'="' .
			($this->mobileSrc && empty($mobile_srcset)
				? BASE_URL .
					$this->src .
					', ' .
					BASE_URL .
					$this->mobileSrc .
					' ' .
					$this->breakpoint .
					'w,'
				: '');

		return $srcset_string .=
			implode(
				', ',
				array_map(
					fn($src) => str_replace(BASE_DIR, BASE_URL, $src) .
						(preg_match(
							'/[0-9]{2,}(w|h)(?=\.\w{2,}$)/',
							$src,
							$matches
						)
							? ' ' . $matches[0]
							: ''),

					array_merge(
						$this->getSrcset(
							BASE_DIR . $this->src,
							null,
							$this->mobileSrc ? $this->breakpoint * 1.75 : 0
						),
						$mobile_srcset
					)
				)
			) . '"';
	}

	private function getDimensionsAttributes(): string {
		return getimagesize(BASE_DIR . $this->src)[3] ?? '';
	}

	private function getAltAttribute(): string|null {
		if (!$this->alt) {
			return null;
		}

		return 'alt="' . $this->alt . '"';
	}

	private function renderImageAttributes() {
		echo $this->getSrcAttribute() .
			' ' .
			$this->getSrcsetAttribute() .
			' ' .
			$this->getDimensionsAttributes() .
			($this->getAltAttribute() ? ' ' . $this->getAltAttribute() : '');
	}

	protected function render() {
		?>
		<img <?php $this->renderHTMLAttributes(); ?> <?php $this->renderImageAttributes(); ?>>
    <?php
	}
}
