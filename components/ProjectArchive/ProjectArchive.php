<?php

declare(strict_types=1);

class ProjectArchive extends \PHTMLComponent {
    private \ProjectModel $model;
    private array $projects;

    public function __construct(
        ?string $id = null,
        ?string $class_name = null,
        array $project_slugs = []
    ) {
        $this->model = new \ProjectModel();
        $this->projects = $this->model->getProjects($project_slugs);

        parent::__construct($id, $class_name);
    }

    private function renderProjects(): void {
        foreach ($this->projects as $index => $project) { ?>
        <article class="project" data-category="<?= $project['category'] ?? 'Uncategorized'; ?>" data-order="<?= $index; ?>">
            <a class="project-link" <?= $project['slug'] !== '/' ? 'href="' . BASE_URL . sanitize_uri($project['slug']) . '"' : ''; ?>">
				<?php new \Image(
				    null,
				    'project-thumbnail',
				    $project['thumbnail'],
				    'NORDEN Projekt: ' . $project['title'],
				    true
				); ?>
				<footer class="project-footer">
					<h2 class="project-title"><?= $project['preview_title'] ?? $project['title']; ?></h2>
					<p class="project-category"><?= $project['category'] ?? 'Uncategorized'; ?></p>
				</footer>
            </a>
        </article>
        <?php }
        }

    public function render() {
        ?>
		<header class="projects-header">
			<h1>WORK</h1>
			<div class="project-filter-wrapper">
				<a class="filter-toggle">Filter here</a>
				<div class="filter-list">
					<a class="filter-link">Corporate Design</a>
					<a class="filter-link">Editorial Design</a>
					<a class="filter-link">Typography</a>
					<a class="filter-link">Grafik Support</a>
					<a class="filter-link">Event Branding</a>
					<a class="filter-link">Packaging Design</a>
					<a class="filter-link">Logo Design</a>
				</div>
			</div>
		</header>
        <section <?php $this->renderHTMLAttributes(); ?>>
			
            <?php $this->renderProjects(); ?>
        </section>
    <?php
    }
}
