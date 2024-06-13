<?php

declare(strict_types=1);

/**
 * Footer menu component
 *
 * Renders footer menu using provided props
 */
class FooterMenu extends PHTMLComponent {
	public function __construct(?string $id, ?string $class_name) {
		parent::__construct($id, $class_name);
	}

	protected function render() {
		?>
        <nav <?php $this->renderHTMLAttributes(); ?>>
            <?php new MenuController('footer_menu'); ?>
        </nav> 
    <?php
	}
}
