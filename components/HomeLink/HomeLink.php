<?php

declare(strict_types=1);

/**
 * Home link component
 *
 * Renders home link with Logo using provided props
 */
class HomeLink extends PHTMLComponent {
	private string $width;

	public function __construct(
		?string $id,
		?string $class_name,
		?string $width = '4rem'
	) {
		$this->width = $width;

		parent::__construct($id, $class_name);
	}

	protected function render() {
		?>
        <a <?php $this->renderHTMLAttributes(); ?> href="<?php echo BASE_URL; ?>">
            <?php new Logo(null, null, $this->width, 'Zur Startseite'); ?>
        </a>
    <?php
	}
}
