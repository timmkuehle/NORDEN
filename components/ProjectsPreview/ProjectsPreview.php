<?php

class ProjectsPreview extends PHTMLComponent {
	private ProjectModel $model;
	private array $projects;

	public function __construct(
		?string $id,
		?string $class_name,
		array $project_slugs = []
	) {
		$this->model = new ProjectModel();

		$this->projects = $this->model->getProjects($project_slugs);

		parent::__construct($id, $class_name);
	}

	protected function render() {
		?>
        <section <?php $this->renderHTMLAttributes(); ?>>
			<p class="text-style-subline vertical-text color-primary">Our Projects</p>
			<section class="projects">
				<?php foreach ($this->projects ?? [] as $index => $project): ?>
					<article class="project">
						<a id="project-<?php echo $index + 1; ?>" class="project-link"
						href="<?php echo BASE_URL . $project['slug']; ?>">
							<header class="project-header">
								<h3 class="project-category"><?php echo $project['category'] ??
        	'Uncategorized'; ?></h3>
							</header>
							<?php new Image(
       	null,
       	'project-thumbnail',
       	$project['thumbnail'],
       	'Prokjekt ansehen: ' . $project['title'],
       	true
       ); ?>
						</a>
					</article>
				<?php endforeach; ?>
				<div class="project-archive-button-container">
					<?php new Button(
     	null,
     	'project-archive-button no-min-width',
     	'Alle Projekte',
     	'/projekte',
     	'secondary'
     ); ?>
				</div>
			</section>
        </section>
	<?php
	}
}
