<?php

declare(strict_types=1);

/**
 * HTML start component
 *
 * Renders opening html tag and head tag using provided props
 */
class HtmlStart extends PHTMLComponent {
	private string $language;
	private string $title;
	private ?string $description;
	private array $scripts;
	private array $styles;

	public function __construct(
		?string $language,
		?string $title,
		?string $description,
		?array $scripts,
		?array $styles
	) {
		$this->language = $language ?? LANG_CODE;
		$this->title = $title ?? SITE_TITLE;
		$this->description = $description ?? SITE_DESC;
		$this->scripts = $scripts ?? [];
		$this->styles = $styles ?? [];

		parent::__construct(null, null);
	}

	protected function render() {
		?>
        <!DOCTYPE html>
        <html lang="<?php echo $this->language; ?>">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $this->title; ?></title>
			<?php if ($this->description): ?>
			<meta name="description" content="<?php echo $this->description; ?>">
			<meta name="relativeBaseDir" content="<?php echo ROOT_PATH; ?>/">
			<?php endif; ?>
            <?php
            foreach ($this->scripts as $handle => $script) {
            	include_script($handle, $script['src'], $script['hash']);
            }
            foreach ($this->styles as $handle => $path) {
            	include_style($handle, $path);
            }?>
        </head>
        <body>
			<input type="checkbox" id="mobile-menu-checkbox">
    <?php
	}
}
