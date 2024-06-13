<?php

declare(strict_types=1);

/**
 * Logo component
 *
 * Renders SVG logo using provided props
 */
class Logo extends PHTMLComponent {
	private string $width;
	private string|null $description;
	private string $randomIdSuffix;

	public function __construct(
		?string $id,
		?string $class_name,
		?string $width = '4rem',
		?string $description = null
	) {
		$this->width = $width;
		$this->description = $description;
		$this->randomIdSuffix = strval(rand(100000, 999999));

		parent::__construct($id, $class_name);
	}

	private function renderSVGAttributes() {
		$attrs =
			$this->renderHTMLAttributes(true) .
			' ' .
			$this->renderStyleAttribute(['width' => $this->width], true) .
			' role="img"';

		if ($this->description) {
			$attrs .=
				' aria-labelledby="site-logo-title-' .
				$this->randomIdSuffix .
				'"';
		}

		echo $attrs;
	}

	protected function render() {
		?>
        <svg xmlns="http://www.w3.org/2000/svg" <?php $this->renderSVGAttributes(); ?> viewBox="0 0 256 45.1">
			<?php if ($this->description): ?>
			<title id="site-logo-title-<?php echo $this->randomIdSuffix; ?>"><?php echo $this->description; ?></title>
			<?php endif; ?>
            <polygon id="N_1" class="letters" points="24.92 .8 24.92 27.83 8.83 .8 0 .8 0 44.91 9.22 44.91 9.22 17.95 25.25 44.91 34.15 44.91 34.15 .8 24.92 .8" />
            <path id="O" class="letters" d="M53.13,22.22c0,9.63,3.28,14.73,9.71,14.73s9.97-5.17,9.97-14.8c0-8.21-3.02-14.02-9.84-14.02-6.24,0-9.84,4.85-9.84,14.08M81.94,22.03c0,13.7-6.43,23.06-19.1,23.06s-18.84-9.11-18.84-22.87S51.07,0,62.97,0c12.8,0,18.97,10.14,18.97,22.03" />
            <path id="R" class="letters" d="M100.21,9.11v11.18h10.68c3.73,0,5.4-3.16,5.4-5.49,0-2.46-1.67-5.68-5.4-5.68h-10.68ZM110.95.77c10.35,0,14.47,7.88,14.47,14.09,0,4.33-2.25,9.69-7.52,12.21l9.97,17.25h-10.48l-8.87-15.76h-8.3v15.76h-9.07V.77h19.81Z" />
            <path id="D" class="letters" d="M144.21,8.91v27.27h7.65c6.62,0,9.97-4.72,9.97-14.22,0-8.01-3.34-13.05-9.97-13.05h-7.65ZM151.86.77c12.6,0,19.1,9.17,19.1,21.06,0,13.7-6.49,22.48-19.1,22.48h-16.72V.77h16.72Z" />
            <polygon id="E" class="letters" points="211.36 9.11 189.49 9.11 189.49 18.09 207.95 18.09 207.95 26.42 189.49 26.42 189.49 35.99 211.36 35.99 211.36 44.32 180.43 44.32 180.43 .77 211.36 .77 211.36 9.11" />
            <polygon id="N_2" class="letters" points="256 44.32 247.25 44.32 231.5 17.7 231.5 44.32 222.43 44.32 222.43 .77 231.11 .77 246.93 27.46 246.93 .77 256 .77 256 44.32" />
        </svg>
    <?php
	}
}
