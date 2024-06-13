<?php

declare(strict_types=1);

class Showreel extends PHTMLComponent {
	private array $sources;
	private string $alt;

	public function __construct(
		?string $id,
		?string $class_name,
		array $sources,
		string $alt = 'Showreel'
	) {
		$this->sources = $sources;
		$this->alt = $alt;

		parent::__construct($id, $class_name);
	}

	private function renderSources() {
		$sanitized_sources = array_filter(
			$this->sources,
			fn($source) => file_exists(BASE_DIR . sanitize_uri($source))
		);

		foreach ($sanitized_sources as $source) {
			$src = BASE_URL . sanitize_uri($source);
			$type = mime_content_type(BASE_DIR . sanitize_uri($source));

			echo '<source src="' . $src . '" type="' . $type . '">';
		}
	}

	public function render() {
		?>
		<section <?php $this->renderHTMLAttributes(); ?>>
			<video class="showreel-video" alt="<?php echo $this->alt; ?>" muted autoplay loop>
				<?php $this->renderSources(); ?>
			</video>
		</section>
    <?php
	}
}
