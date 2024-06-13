<?php

declare(strict_types=1);

/**
 * Image component
 *
 * Renders image using provided props
 */
class Svg extends PHTMLComponent {
	private string $src;
	private string|null $title;
	private string $titleId;

	public function __construct(
		?string $id,
		?string $class_name,
		string $src,
		string $title = null
	) {
		$this->src = sanitize_uri($src);

		if (!file_exists(BASE_DIR . $this->src)) {
			return;
		}

		$this->title = $title;
		$this->titleId = 'svg-title-' . strval(rand(100000, 999999));

		parent::__construct($id, $class_name);
	}

	protected function render() {
		$svg = new SimpleXMLElement(file_get_contents(BASE_DIR . $this->src));

		unset($svg->attributes()['data-name']);

		if (isset($svg->attributes()['style'])) {
			$svg->attributes()['style'] =
				$svg->attributes()['style'] . 'overflow:hidden;';
		} else {
			$svg->addAttribute('style', 'overflow:hidden;');
		}

		if ($this->id) {
			if (isset($svg->attributes()['id'])) {
				$svg->attributes()['id'] = $this->id;
			} else {
				$svg->addAttribute('id', $this->id);
			}
		} else {
			unset($svg->attributes()['id']);
		}

		if ($this->className) {
			if (isset($svg->attributes()['class'])) {
				$svg->attributes()['class'] = $this->className;
			} else {
				$svg->addAttribute('class', $this->className);
			}
		}

		if ($this->title) {
			if (isset($svg->attributes()['aria-labelledby'])) {
				$svg->attributes()['aria-labelledby'] = $this->titleId;
			} else {
				$svg->addAttribute('aria-labelledby', $this->titleId);
			}

			unset($svg->title);

			$svgDom = dom_import_simplexml($svg);
			$svgDom->insertBefore(
				$svgDom->ownerDocument->createElement('title', $this->title),
				$svgDom->firstChild
			);

			$svg = simplexml_import_dom($svgDom);

			$svg->title->addAttribute('id', $this->titleId);
		}

		echo $svg->asXML();
	}
}
