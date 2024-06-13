<?php

declare(strict_types=1);

/**
 * Contact menu component
 *
 * Renders contact menu and mobile menu button using provided props
 */
class ContactMenu extends PHTMLComponent {
	public function __construct(?string $id, ?string $class_name) {
		parent::__construct($id, $class_name);
	}

	protected function render() {
		?>
        <nav <?php $this->renderHTMLAttributes(); ?>>
            <?php new MenuController('contact_menu'); ?>
        </nav> 
    <?php
	}
}
