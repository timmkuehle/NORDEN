<?php

declare(strict_types=1);

/**
 * Image component
 *
 * Renders image using provided props
 */
class Image extends PHTMLComponent {
	private string $src;
	private string|null $alt;

	public function __construct(
		?string $id,
		?string $class_name,
		string $src,
		string $alt = null
	) {
		$this->src = sanitize_uri($src);

		if (!file_exists(BASE_DIR . $this->src)) {
			return;
		}

		$this->alt = $alt;

		parent::__construct($id, $class_name);
	}

	private function getSrcAttribute(): string {
		return 'src="' . BASE_URL . $this->src . '"';
	}

	private function getSrcsetAttribute() {
		$path = BASE_DIR . $this->src;
		$path_parts = pathinfo($path);

		return 'srcset="' .
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

					glob(
						$path_parts['dirname'] .
							'/' .
							$path_parts['filename'] .
							'*'
					)
				)
			) .
			'"';
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
