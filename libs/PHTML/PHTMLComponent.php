<?php

declare(strict_types=1);

/**
 * PHTML Component class
 *
 * Base structure for extending PHTML components
 *
 * @property ?string $id ID set in "id" attribute of outermost HTML element
 * @property ?string $className Class name set in "class" attribute of outermost HTML element
 * @property ?array $props Properties used in render method
 * @property ?array $children Associative array of child components and their props
 */
class PHTMLComponent {
	protected ?string $id;
	protected ?string $className;
	protected ?array $props;
	protected ?array $children;

	/**
	 * Constructor method
	 *
	 * Saves props parameter in property and executes render method
	 *
	 * @param ?string $id ID set in "id" attribute of outermost HTML element
	 * @param ?string $class_name Class name set in "class" attribute of outermost HTML element
	 */
	public function __construct(
		?string $id = null,
		?string $class_name = null
	) {
		$this->id = $id;
		$this->className =
			preg_replace(
				'/^\-/',
				'',
				preg_replace_callback(
					'/[A-Z]/',
					fn($matches) => '-' . strtolower($matches[0]),
					get_class($this)
				)
			) . ($class_name ? ' ' . $class_name : '');

		$this->render();
	}

	/**
	 * Method to render HTML attributes
	 *
	 * @param ?bool $return_only If set to true, HTML atrributes will be returned instead of rendered
	 */
	protected function renderHTMLAttributes(?bool $return_only = false) {
		$attrs =
			($this->id ? 'id="' . $this->id . '" ' : '') .
			'class="' .
			$this->className .
			'"';

		if ($return_only) {
			return $attrs;
		}

		echo $attrs;
	}

	/**
	 * Method to render inline style attribute
	 *
	 * @param ?array $props Array of CSS Properties and their values
	 * @param ?bool $return_only If set to true, syle attribute will be returned instead of rendered
	 */
	protected function renderStyleAttribute(
		?array $props = [],
		?bool $return_only = false
	) {
		$styleAttr = 'style="';

		$counter = 0;
		foreach ($props as $prop => $value) {
			$counter += 1;

			$styleAttr .=
				$prop . ': ' . $value . ($counter < count($props) ? '; ' : ';');
		}

		$styleAttr .= '"';

		if ($return_only) {
			return $styleAttr;
		}

		echo $styleAttr;
	}

	/**
	 * Render method
	 *
	 * Renders HTML Elements, overwritten by render method of extending component class
	 */
	protected function render() {
	}
}
