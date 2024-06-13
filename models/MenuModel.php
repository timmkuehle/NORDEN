<?php

declare(strict_types=1);

/**
 * Menu model class
 *
 * Defines all site menus
 *
 * @property array $menus Holds information arrays for all existing menus
 */
class MenuModel {
	private array $menus = [
		'header_menu' => [
			[
				'title' => 'Projekte',
				'link' => '/projekte'
			],
			[
				'title' => 'Agentur',
				'link' => '/agentur'
			],
			[
				'title' => 'Jobs',
				'link' => '/jobs'
			]
		],
		'contact_menu' => [
			[
				'title' => 'Kontakt',
				'link' => 'kontakt'
			]
		],
		'footer_menu' => [
			[
				'title' => 'Impressum',
				'link' => '/impressum'
			],
			[
				'title' => 'Datenschutz',
				'link' => '/datenschutz'
			],
			[
				'title' => 'AGB',
				'link' => '/agb'
			]
		]
	];

	/**
	 * Menu sanitization method
	 *
	 * Sanitizes all links of requested menu
	 *
	 * @param array $raw_menu Menu to sanitize
	 * @return array Sanitized menu
	 */
	private function sanitizeMenu(array $raw_menu): array {
		return array_map(
			fn($menu) => array_replace($menu, [
				'link' => sanitize_uri($menu['link'])
			]),
			$raw_menu
		);
	}

	/**
	 * Menu getter
	 *
	 * @param string $slug Slug of requested menu
	 * @return array Menu information, requested by menu controller
	 */
	public function getMenu(string $slug): array {
		return $this->sanitizeMenu($this->menus[$slug]);
	}
}
