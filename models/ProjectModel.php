<?php

declare(strict_types=1);

/**
 * Project model class
 *
 * Defines projects and provides current project information
 *
 * @property array $projects Holds information arrays for all existing projects
 * @property array $currentProject Holds information about current projects, requested by project controller
 */
class ProjectModel {
	private array $projects = [
		[
			'slug' => '/projekte/soelden',
			'content_path' => '/content/projects/soelden',
			'title' => 'Sölden',
			'thumbnail' => '/content/resources/media/SOEL_Thumbnail.webp',
			'archive_layer' => 'middle'
		],
		[
			'slug' => '/content/resources/media/Thumbnail_ARANEA.jpg',
			'content_path' => '/content/projects/aranea',
			'title' => 'Aranea',
			'thumbnail' => '/content/resources/media/ARANEA_Thumbnail.webp',
			'archive_layer' => 'front'
		],
		[
			'slug' => '/projekte/seefeld',
			'content_path' => '/content/projects/seefeld',
			'title' => 'Seefeld',
			'thumbnail' => '/content/resources/media/SFLD_Thumbnail.webp',
			'archive_layer' => 'front'
		],
		[
			'slug' => '/projekte/gurgl',
			'content_path' => '/content/projects/gurgl',
			'title' => 'Gurgl',
			'thumbnail' => '/content/resources/media/GRGL_Thumbnail.webp',
			'archive_layer' => 'back'
		],
		[
			'slug' => '/projekte/alpachtal',
			'content_path' => '/content/projects/alpachtal',
			'title' => 'Alpachtal',
			'thumbnail' => '/content/resources/media/ABT_Thumbnail.webp',
			'archive_layer' => 'front'
		]
	];
	private array $currentProject;

	/**
	 * Constructor method
	 *
	 * Sets current project property, if slug is provided
	 *
	 * @param ?string $slug Slug of requested page
	 */
	public function __construct(?string $slug = null) {
		if ($slug) {
			$filtered_projects = array_values(
				array_filter(
					$this->sanitizeProjects($this->projects),
					fn($project) => $project['slug'] === sanitize_uri($slug)
				)
			);

			$this->currentProject = $filtered_projects[0] ?? [];
		}
	}

	/**
	 * Projects sanitization method
	 *
	 * Sanitizes slug and content path of every project
	 *
	 * @return array Sanitized projects array
	 */
	private function sanitizeProjects(): array {
		return array_map(
			fn($project) => array_replace($project, [
				'slug' => sanitize_uri($project['slug']),
				'content_path' => sanitize_uri($project['content_path'])
			]),
			$this->projects
		);
	}

	/**
	 * Current project getter
	 *
	 * @return array Current project information, requested by project controller
	 */
	public function getCurrentProject(): array {
		return $this->currentProject;
	}

	/**
	 * Projects getter
	 *
	 * Gets project list, filtered by slugs if provided
	 *
	 * @param ?array $slugs Project slugs to return
	 * @return array Filtered or full project list
	 */
	public function getProjects(?array $slugs = null): array {
		$sanitized_slugs = $slugs
			? array_map(fn($slug) => sanitize_uri($slug), $slugs)
			: [];
		$sanitized_projects = $this->sanitizeProjects();

		return $slugs
			? array_values(
				array_filter(
					$sanitized_projects,
					fn($project) => in_array($project['slug'], $sanitized_slugs)
				)
			)
			: $sanitized_projects;
	}
}
