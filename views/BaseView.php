<?php

declare(strict_types=1);

/**
 * Base view class
 *
 * Renders current template, requested by controller
 */
class BaseView {
	protected string $language;
	protected string $title;
	protected ?string $description;
	protected ?string $template;
	protected array $scripts;
	protected array $styles;
	protected bool $useDefaultStructure;
	private const TEMPLATE_META_ONLY_FLAG = 'NORDEN_TEMPLATE_META_ONLY';

	/**
	 * Constructor method
	 *
	 * Sets properties and calls render method
	 *
	 * @param array $headers HTTP headers
	 * @param string $language Language set in "lang" attribute of <html> tag
	 * @param string $title Resource title set in HTML <title> tag, defaults to uppercase package name
	 * @param ?string $description Resource description set in HTML <meta name="description"> tag
	 * @param ?string $template Path to resource template file
	 * @param ?array $scripts Array of scripts information (directory and content hash)
	 * @param ?array $styles Resource stylesheet paths, relative to base URL
	 * @param bool $use_default_structure If set to false, render method will not render site header and footer
	 */

	public function __construct(
		array $headers,
		string $language,
		string $title,
		?string $description,
		?string $template = null,
		?array $scripts = [],
		?array $styles = [],
		bool $use_default_structure = true
	) {
		$this->language = $language;
		$this->title = $title;
		$this->description = $description;
		$this->template = $template;
		$this->scripts = $scripts;
		$this->styles = $styles;
		$this->useDefaultStructure = $use_default_structure;

		$this->setHTTPHeaders($headers);

		$this->render();
	}

	/**
	 * Method to set HTTP headers
	 *
	 * @param array $headers HTTP headers
	 */
	protected function setHTTPHeaders($headers): void {
		foreach ($headers as $name => $value) {
			header($name . ': ' . $value);
		}
	}

	/**
	 * Render method
	 *
	 * Renders provided template
	 * Site header and footer are included depending on "useDefaultStructure" property
	 */
	protected function render(): void {
		if (!$this->template) {
			throw new Error(
				'BaseView Render Error: No template file path provided',
				500
			);
		}

		$this->applyTemplateMetaOverrides();

		if ($this->useDefaultStructure) {
			new SiteHeader(
				null,
				null,
				false,
				$this->language,
				$this->title,
				$this->description,
				[],
				$this->styles
			);

			echo '<main>';
		} else {
			new HtmlStart(
				$this->language,
				$this->title,
				$this->description,
				null,
				$this->styles
			);
		}

		require $this->template;

		if ($this->useDefaultStructure) {
			echo '</main>';

			new SiteFooter(null, null, false, $this->scripts);
		} else {
			new HtmlEnd($this->scripts);
		}
	}

	/**
	 * Apply meta overrides provided by template.
	 *
	 * Templates can define SEO fields at the top and expose them by setting
	 * `$NORDEN_TEMPLATE_META` when `$NORDEN_TEMPLATE_META_ONLY` is true.
	 */
	private function applyTemplateMetaOverrides(): void {
		if (!$this->template || !is_readable($this->template)) {
			return;
		}

		// Only project templates implement the meta-only convention currently.
		if (strpos($this->template, '/content/projects/') === false) {
			return;
		}

		$meta = $this->extractTemplateMeta($this->template);

		if (isset($meta['title']) && is_string($meta['title']) && trim($meta['title']) !== '') {
			$this->title = $meta['title'];
		}

		if (array_key_exists('description', $meta)) {
			$desc = $meta['description'];
			$this->description = (is_string($desc) && trim($desc) !== '') ? $desc : null;
		}
	}

	/**
	 * Runs template in "meta only" mode and returns extracted meta.
	 *
	 * @return array{title?:string,description?:?string}
	 */
	private function extractTemplateMeta(string $templatePath): array {
		$NORDEN_TEMPLATE_META_ONLY = true;
		$NORDEN_TEMPLATE_META = [];

		ob_start();
		try {
			include $templatePath;
		} finally {
			ob_end_clean();
		}

		return is_array($NORDEN_TEMPLATE_META) ? $NORDEN_TEMPLATE_META : [];
	}
}
