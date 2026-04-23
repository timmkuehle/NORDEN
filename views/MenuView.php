<?php

declare(strict_types=1);

/**
 * Menu view class
 *
 * Renders menu, requested by menu controller
 */
class MenuView {
	private array $menu;
	private ?string $menuSlug;

	/**
	 * Constructor method
	 *
	 * Sets menu property and calls render method
	 *
	 * @param array $menu Requested menu
	 */
	public function __construct(array $menu, ?string $menu_slug = null) {
		$this->menu = $menu;
		$this->menuSlug = $menu_slug;

		$this->render();
	}

	/**
	 * Method to render menu item classnames
	 *
	 * @param string $uri Menu item URI
	 */
	private function renderMenuItemClassName(string $uri) {
		$current_route = Router::getCurrentRoute('uri');
		$class_name = 'menu-item';

		if ($uri === $current_route) {
			$class_name .= ' active-menu-item';
		} elseif (str_contains($current_route, $uri)) {
			$class_name .= ' has-active-menu-item';
		}

		echo $class_name;
	}

	/**
	 * Render method
	 *
	 * Renders requested menu
	 */
	protected function render(): void {
		$withSeparators = $this->menuSlug === 'footer_menu';
		?>
        <ul class="nav-menu">
		<?php foreach ($this->menu as $index => $menu_item): ?>
			<li class="<?php $this->renderMenuItemClassName($menu_item['link']); ?>">
				<a class="menu-item-link" href="<?php echo BASE_URL .
    	$menu_item['link']; ?>"><?php echo $menu_item['title']; ?></a>
			</li>
			<?php if ($withSeparators && $index < count($this->menu) - 1) { ?>
				<li class="menu-separator" aria-hidden="true">/</li>
			<?php } ?>
		<?php endforeach; ?>
		</ul>
	<?php
	}
}
