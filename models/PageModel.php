<?php

declare(strict_types=1);

/**
 * Page model class
 *
 * Defines all pages and provides current page information
 *
 * @property array $pages Holds information arrays for all existing pages
 * @property array $currentPage Holds information about current page, requested by page controller
 */
class PageModel {
	private array $pages = [
		[
			'slug' => '/',
			'content_path' => '/content/pages/home',
			'title' => 'NORDEN',
			'use_default_structure' => false
		],
		[
			'slug' => '/projekte',
			'content_path' => '/content/pages/projects',
			'title' => 'NORDEN | Projekte',
			'use_default_structure' => false
		],
		[
			'slug' => '/agentur',
			'content_path' => '/content/pages/agency',
			'title' => 'NORDEN | Agentur'
		],
		[
			'slug' => '/jobs',
			'content_path' => '/content/pages/jobs',
			'title' => 'NORDEN | Jobs'
		],
		[
			'slug' => '/kontakt',
			'content_path' => '/content/pages/contact',
			'title' => 'NORDEN | Kontakt',
			'use_default_structure' => false
		],
		[
			'slug' => '/impressum',
			'content_path' => '/content/pages/imprint',
			'title' => 'NORDEN | Impressum',
			'description' =>
				'Im Impressum von NORDEN findest du alle wichtigen Firmeninformationen und Kontaktdaten.'
		],
		[
			'slug' => '/datenschutz',
			'content_path' => '/content/pages/privacy',
			'title' => 'NORDEN | Datenschutz'
		]
	];
	private array $currentPage;

	/**
	 * Constructor method
	 *
	 * Sets current page property if slug is provided
	 *
	 * @param ?string $slug Slug of requested page
	 */
	public function __construct(?string $slug) {
		if ($slug) {
			$filtered_pages = array_values(
				array_filter(
					$this->sanitizePages($this->pages),
					fn($page) => $page['slug'] === sanitize_uri($slug)
				)
			);

			$this->currentPage = $filtered_pages[0] ?? [];
		}
	}

	/**
	 * Pages sanitization method
	 *
	 * Sanitizes slug and content path of every page
	 *
	 * @return array Sanitized pages array
	 */
	private function sanitizePages(): array {
		return array_map(
			fn($page) => array_replace($page, [
				'slug' => sanitize_uri($page['slug']),
				'content_path' => sanitize_uri($page['content_path'])
			]),
			$this->pages
		);
	}

	/**
	 * Current page getter
	 *
	 * @return array Current page information, requested by page controller
	 */
	public function getCurrentPage(): array {
		return $this->currentPage;
	}
}
