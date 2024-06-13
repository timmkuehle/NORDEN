<?php

declare(strict_types=1);

/**
 * Minimal Footer component
 *
 * Renders minimal footer tag using provided props
 */
class MinimalFooter extends PHTMLComponent {
	public function __construct(?string $id, ?string $class_name) {
		parent::__construct($id, $class_name);
	}

	protected function render() {
		?>
		<footer <?php $this->renderHTMLAttributes(); ?>>
            <?php new FooterMenu(null, null); ?>
		</footer>
	<?php
	}
}
