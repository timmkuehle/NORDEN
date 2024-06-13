<?php

declare(strict_types=1);

/**
 * Header menu component
 *
 * Renders header menu and mobile menu button using provided props
 */
class HeaderMenu extends PHTMLComponent {
	public function __construct(?string $id, ?string $class_name) {
		parent::__construct($id, $class_name);
	}

	protected function render() {
		?>
        <nav <?php $this->renderHTMLAttributes(); ?>>
			<label class="mobile-menu-button" for="mobile-menu-checkbox">
				<svg class="menu-icon" aria-labelledby="menu-icon-title" width="32" height="32" viewBox="0 0 32 32" role="img" xmlns="http://www.w3.org/2000/svg">
    				<title id="menu-icon-title">Hauptmenü</title>
					<line class="menu-icon-stroke top" x1="0" y1="11" x2="32" y2="11" transform-origin="16 11" />
					<line class="menu-icon-stroke bottom" x1="0" y1="21" x2="32" y2="21" transform-origin="16 21" />
				</svg>
			</label>
            <?php new MenuController('header_menu'); ?>
        </nav> 
    <?php
	}
}
