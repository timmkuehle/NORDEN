<?php

class ProjectsPreview extends \PHTMLComponent {
    private \ProjectModel $model;
    private array $projects;

    public function __construct(
        ?string $id,
        ?string $class_name,
        array $project_slugs = []
    ) {
        $this->model = new \ProjectModel();

        $this->projects = $this->model->getProjects($project_slugs);

        parent::__construct($id, $class_name);
    }

    protected function render() {
        ?>
        <section <?php $this->renderHTMLAttributes(); ?>>
			<section class="projects">
				<?php foreach ($this->projects ?? [] as $index => $project): ?>
					<article class="project">
						<a id="project-<?= $index + 1; ?>" class="project-link"
						href="<?= BASE_URL . $project['slug']; ?>">
							<?php new \Image(
							    null,
							    'project-thumbnail',
							    $project['thumbnail'],
							    'Prokjekt ansehen: ' . $project['title'],
							    true
							); ?>
							<footer class="project-footer">
								<h2 class="project-title"><?= $project['preview_title'] ?? $project['title']; ?></h2>
								<p class="project-category"><?= $project['category'] ?? 'Uncategorized'; ?></p>
							</footer>
						</a>
					</article>
				<?php endforeach; ?>
			</section>
        </section>
	<?php
    }
}
