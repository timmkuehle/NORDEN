<?php

declare(strict_types=1);

class ProjectArchive extends PHTMLComponent {
	private ProjectModel $model;
	private array $projects;

	public function __construct(
		?string $id = null,
		?string $class_name = null,
		array $project_slugs = null
	) {
		$this->model = new ProjectModel();
		$this->projects = $this->model->getProjects($project_slugs);

		parent::__construct($id, $class_name);
	}

	private function renderProjects(): void {
		foreach ($this->projects as $project) { ?>
        <article class="project layer-<?php echo $project['archive_layer'] ??
        	'middle'; ?>">
            <a class="project-link"
            href="<?php echo BASE_URL . sanitize_uri($project['slug']); ?>">
				<?php new Image(
    	null,
    	'project-thumbnail',
    	$project['thumbnail'],
    	'Projekt-Thumbnail: ' . $project['title']
    ); ?>
            	<h3 class="project-title"><?php echo $project['title'] ??
             	'Untitled'; ?></h3>
            </a>
        </article>
        <?php }
	}

	public function render() {
		?>
        <section <?php $this->renderHTMLAttributes(); ?>>
            <?php $this->renderProjects(); ?>
			<?php new SiteFooter(null, 'layer-front full-width no-padding', true, []); ?>
        </section>
    <?php
	}
}
