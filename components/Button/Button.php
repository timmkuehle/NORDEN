<?php

declare(strict_types=1);

/**
 * Button component
 *
 * Renders button using provided props
 */
class Button extends PHTMLComponent {
	private string $text;
	private string $link;

	public function __construct(
		?string $id,
		?string $class_name,
		string $text,
		string $link,
		string $variant = 'primary'
	) {
		$this->text = $text;
		$this->link =
			str_starts_with($link, 'mailto:') || str_starts_with($link, 'tel:')
				? $link
				: BASE_URL . sanitize_uri($link);
		$this->id = $id;

		parent::__construct(
			$id,
			$class_name .
				(!empty($class_name) ? ' ' : '') .
				'text-style-button ' .
				$variant
		);
	}

	protected function render() {
		?>
        <a <?php $this->renderHTMLAttributes(); ?>
        href="<?php echo $this->link; ?>">
            <?php echo $this->text; ?>
        </a>
    <?php
	}
}
