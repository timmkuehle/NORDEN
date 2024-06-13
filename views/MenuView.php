<?php

declare(strict_types=1);

/**
 * Menu view class
 *
 * Renders menu, requested by menu controller
 */
class MenuView {
	private array $menu;

	/**
	 * Constructor method
	 *
	 * Sets menu property and calls render method
	 *
	 * @param array $menu Requested menu
	 */
	public function __construct(array $menu) {
		$this->menu = $menu;

		$this->render();
	}

	/**
	 * Render method
	 *
	 * Renders requested menu
	 */
	protected function render(): void {
		?>
        <ul class="nav-menu">
		<?php foreach ($this->menu as $menu_item): ?>
			<li class="menu-item">
				<a class="menu-item-link" href="<?php echo BASE_URL .
    	$menu_item['link']; ?>"><?php echo $menu_item['title']; ?></a>
			</li>	
		<?php endforeach; ?>
		</ul>
	<?php
	}
}
