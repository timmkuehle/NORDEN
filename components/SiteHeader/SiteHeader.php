<?php

declare(strict_types=1);

/**
 * Site Header component
 *
 * Renders HTML header tag using provided props
 */
class SiteHeader extends PHTMLComponent {
	private bool $noHead;
	private string $language;
	private string $title;
	private ?string $description;
	private array $scripts;
	private array $styles;

	public function __construct(
		?string $id,
		?string $class_name,
		?bool $no_head,
		?string $language,
		?string $title,
		?string $description,
		?array $scripts,
		?array $styles
	) {
		$this->noHead = $no_head ?? false;

		if (!$this->noHead) {
			$this->language = $language ?? LANG_CODE;
			$this->title = $title ?? SITE_TITLE;
			$this->description = $description ?? SITE_DESC;
			$this->scripts = $scripts ?? [];
			$this->styles = $styles ?? [];
		}

		parent::__construct($id, $class_name);
	}

	protected function render() {
		if (!$this->noHead) {
			new HtmlStart(
				$this->language,
				$this->title,
				$this->description,
				$this->scripts,
				$this->styles
			);
		} ?>
        <header <?php $this->renderHTMLAttributes(); ?>>
			<div class="slot start">
				<?php new HeaderMenu(null, null); ?>
			</div>
			<div class="slot center">
				<?php new HomeLink(null, null, 'auto', 'Zur Startseite'); ?>
			</div>
			<div class="slot end">
				<?php new ContactMenu(null, null); ?>
			</div>
        </header>
    <?php
	}
}
