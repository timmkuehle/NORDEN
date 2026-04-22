<?php

class ProjectsPreview extends \PHTMLComponent {
    private \ProjectModel $model;
    private array $projects;
	private bool $lazyLoaded;

	private function renderComingSoonBadge(): void {
		?>
		<span class="coming-soon-badge" aria-hidden="true">
			soon coming soon coming
		</span>
		<?php
	}

    public function __construct(
        ?string $id,
        ?string $class_name,
        array $project_slugs = [],
		bool $lazy_loaded = true
    ) {
        $this->model = new \ProjectModel();

        $this->projects = $this->model->getProjects($project_slugs);
		$this->lazyLoaded = $lazy_loaded;

        parent::__construct($id, $class_name);
    }

    protected function render() {
        ?>
        <section <?php $this->renderHTMLAttributes(); ?>>
			<section class="projects">
				<?php foreach ($this->projects ?? [] as $index => $project): ?>
					<article class="project">
						<?php
							$is_coming_soon = (bool) ($project['coming_soon'] ?? false);
							$is_linkable = !$is_coming_soon && (($project['slug'] ?? '/') !== '/');
						?>
						<a
							id="project-<?= $index + 1; ?>"
							class="project-link<?= $is_coming_soon ? ' is-coming-soon' : ''; ?>"
							<?= $is_linkable ? 'href="' . BASE_URL . sanitize_uri($project['slug']) . '"' : ''; ?>
						>
							<div class="project-thumbnail-wrapper">
								<?php new \Image(
								    null,
								    'project-thumbnail',
								    $project['thumbnail'],
								    'Prokjekt ansehen: ' . $project['title'],
								    $this->lazyLoaded
								); ?>
								<?php if ($is_coming_soon) { $this->renderComingSoonBadge(); } ?>
							</div>
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
