<?php

declare(strict_types=1);

/**
 * Menu controller class
 *
 * Gets menu information from menu model and initializes menu view
 *
 * @property MenuModel $model Menu model instance
 */
class MenuController {
	private MenuModel $model;

	/**
	 * Constructor method
	 *
	 * Initializes menu model and menu view
	 *
	 * @param string $slug Slug of requested menu
	 */
	public function __construct(string $slug) {
		$this->model = new MenuModel();

		new MenuView($this->model->getMenu($slug));
	}
}
