<?php

declare(strict_types=1);

/**
 * Page controller class
 *
 * Gets page information from page model and initializes page view
 *
 * @property PageModel $model Page model instance
 * @property array $currentPage Holds information about current page
 */
class PageController extends BaseController {
	private PageModel $model;
	private array $currentPage;

	/**
	 * Constructor method
	 *
	 * Initializes page model, sets current page and content path and initializes page view
	 */
	public function __construct() {
		$this->model = new PageModel(Router::getCurrentRoute('uri'));

		$this->currentPage = $this->model->getCurrentPage();

		$this->contentPath = $this->currentPage['content_path'];

		new BaseView(
			$this->getHttpHeaders(),
			$this->currentPage['language'] ?? LANG_CODE,
			$this->currentPage['title'] ?? SITE_TITLE,
			$this->currentPage['description'] ?? SITE_DESC,
			BASE_DIR . $this->contentPath . '/template.php',
			$this->getScripts(),
			$this->getStyles('page'),
			$this->currentPage['use_default_structure'] ?? true
		);
	}
}
