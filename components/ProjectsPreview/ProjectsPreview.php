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
			<p class="text-style-subline vertical-text color-primary">Work</p>
			<p class="subline">Ein bisschen was von allem worauf wir stolz sind</p>
			<h2 class="title">Our Projects</h2>
			<div class="project-links">
				<?php foreach ($this->projects ?? [] as $index => $project): ?>
					<a id="project-<?php echo $index + 1; ?>" class="project"
					href="<?php echo BASE_URL . $project['slug']; ?>">
						<?php new Image(
      	null,
      	'project-thumbnail',
      	$project['thumbnail'],
      	'Prokjekt ansehen: ' . $project['title']
      ); ?>
	  					<h3 class="title"><?php echo $project['title'] ?? 'Untitled'; ?></h3>
					</a>
				<?php endforeach; ?>
    			<?php new Button(
       	null,
       	'project-archive-button no-min-width',
       	'Alle Projekte',
       	'/projekte',
       	'secondary'
       ); ?>
			</div>
        </section>
	<?php
	}
}
