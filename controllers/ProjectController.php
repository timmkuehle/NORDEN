<?php

declare(strict_types=1);

/**
 * Project controller class
 *
 * Gets project information from project model and initializes project view
 *
 * @property ProjectModel $model Project model instance
 * @property array $currentProject Holds information about current project
 */
class ProjectController extends BaseController {
	private ProjectModel $model;
	private array $currentProject;

	/**
	 * Constructor method
	 *
	 * Initializes project model, sets current project and content path and initializes project view
	 */
	public function __construct() {
		$this->model = new ProjectModel(Router::getCurrentRoute('uri'));

		$this->currentProject = $this->model->getCurrentProject();

		$this->contentPath = $this->currentProject['content_path'];

		new BaseView(
			$this->getHttpHeaders(),
			$this->currentProject['language'] ?? LANG_CODE,
			$this->currentProject['title'] ?? SITE_TITLE,
			$this->currentProject['description'] ?? SITE_DESC,
			BASE_DIR . $this->contentPath . '/template.php',
			$this->getScripts(),
			$this->getStyles('project'),
			$this->currentProject['use_default_structure'] ?? true
		);
	}
}
