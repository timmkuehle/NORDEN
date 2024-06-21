<?php

declare(strict_types=1);

/**
 * HTML end component
 *
 * Renders script tags and closing html tag using provided props
 */
class HtmlEnd extends PHTMLComponent {
	private array $scripts;

	public function __construct(?array $scripts) {
		$this->scripts = $scripts ?? [];

		parent::__construct(null, null);
	}

	protected function render() {
		foreach ($this->scripts as $handle => $asset) {
			include_script($handle, $asset['src'], $asset['hash'], true);
		} ?>
    </body>
	</html>
	<?php
	}
}
