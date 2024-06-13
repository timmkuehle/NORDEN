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

	/**
	 * Constructor method
	 *
	 * Sets properties and calls render method
	 *
	 * @param array $headers HTTP headers
	 * @param string $language Language set in "lang" attribute of <html> tag
	 * @param string $title Resource title set in HTML <title> tag, defaults to uppercase package name
	 * @param string $template Path to resource template file
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
		?bool $use_default_structure = true
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

		require_once $this->template;

		if ($this->useDefaultStructure) {
			echo '</main>';

			new SiteFooter(null, null, false, $this->scripts);
		} else {
			new HtmlEnd($this->scripts);
		}
	}
}
