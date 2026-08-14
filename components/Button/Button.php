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
	private bool $disabled;

	public function __construct(
		?string $id,
		?string $class_name,
		string $text,
		string $link,
		string $variant = 'primary'
	) {
		$this->text = $text;
		$this->disabled =
			is_string($class_name) && str_contains($class_name, 'disabled');
		$this->link = $this->disabled
			? '#'
			: (str_starts_with($link, 'mailto:') || str_starts_with($link, 'tel:')
				? $link
				: BASE_URL . sanitize_uri($link));
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
        href="<?php echo $this->link; ?>"
		<?php if ($this->disabled) {
  	echo 'aria-disabled="true" tabindex="-1"';
  } ?>>
            <?php echo $this->text; ?>
        </a>
    <?php
	}
}
