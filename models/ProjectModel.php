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
			'thumbnail' => '/content/resources/media/soelden/SOEL_Thumbnail.jpg'
		],
		[
			'slug' => '/projekte/soelden/typografie',
			'content_path' => '/content/projects/soeldenTypo',
			'title' => 'Sölden Headline Font',
			'thumbnail' =>
				'/content/resources/media/soelden/00_soel_headline_Startbild.jpg'
		],
		[
			'slug' => '/projekte/aranea',
			'content_path' => '/content/projects/aranea',
			'title' => 'ARANEA',
			'thumbnail' =>
				'/content/resources/media/aranea/02_ARANEA_Startbild.jpg'
		],
		[
			'slug' => '/projekte/soelden/electric-mountain-festival',
			'content_path' => '/content/projects/soeldenEmf',
			'title' => 'Electric Mountain Festival',
			'thumbnail' =>
				'/content/resources/media/soeldenEmf/EMF_Opener_Web_Still.jpg'
		],
		[
			'slug' => '/projekte/soelden/oetztaler-radmarathon',
			'content_path' => '/content/projects/oetztaler',
			'title' => 'Ötztaler Radmarathon',
			'thumbnail' =>
				'/content/resources/media/soeldenEmf/EMF_Opener_Web_Still.jpg'
		],
		[
			'slug' => '/projekte/gurgl',
			'content_path' => '/content/projects/gurgl',
			'title' => 'Gurgl',
			'thumbnail' => '/content/resources/media/gurgl/GRGL_Thumbnail.webp'
		],
		[
			'slug' => '/projekte/alpachtal',
			'content_path' => '/content/projects/alpachtal',
			'title' => 'Alpbachtal',
			'thumbnail' =>
				'/content/resources/media/alpbachtal/ABT_Thumbnail.webp'
		],
		[
			'slug' => '/projekte/seefeld',
			'content_path' => '/content/projects/seefeld',
			'title' => 'Seefeld',
			'thumbnail' =>
				'/content/resources/media/seefeld/SFLD_Thumbnail.webp'
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
