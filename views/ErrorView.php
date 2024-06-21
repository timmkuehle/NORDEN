<?php

declare(strict_types=1);

/**
 * Error view class
 *
 * Renders error, requested by page controller
 */
class ErrorView extends BaseView {
	private int $code;
	private string $message;
	private ?array $trace;
	private array $buttons;

	/**
	 * Constructor method
	 *
	 * Sets properties and calls render method
	 *
	 * @param array $headers HTTP headers
	 * @param string $language Language set in "lang" attribute of <html> tag
	 * @param string $title Resource title set in HTML <title> tag, defaults to uppercase package name
	 * @param string $template Path to resource template file
	 * @param int $code Error code
	 * @param ?string $description Error description retrieved from ErrorModel
	 * @param string $message Error message retrieved from ErrorModel
	 * @param ?string $trace Error backtrace
	 * @param array $buttons Buttons to render in production environment
	 * @param array $scripts Array of scripts information (directory and content hash)
	 * @param array $styles Resource stylesheet paths, relative to base URL
	 */
	public function __construct(
		array $headers,
		string $language,
		string $title,
		?string $description,
		string $template,
		int $code,
		string $message,
		?array $trace,
		array $buttons,
		array $scripts,
		array $styles
	) {
		$this->code = $code;
		$this->message = $message;
		$this->trace = $trace;
		$this->buttons = $buttons;

		parent::__construct(
			$headers,
			$language,
			$title,
			$description,
			$template,
			$scripts,
			$styles,
			false
		);
	}

	/**
	 * Render script tag method
	 */
	private function renderScriptTags(): void {
		foreach ($this->scripts as $handle => $script) {
			include_script($handle, $script['src'], $script['hash'], true);
		}
	}

	/**
	 * Render style tag method
	 */
	private function renderStyleTags(): void {
		foreach ($this->styles as $handle => $path) {
			include_style($handle, $path);
		}
	}

	/**
	 * Render menu method
	 *
	 * @param string $component_name Name of PHTML component to render
	 */
	private function renderMenu(string $component_name): void {
		ob_start();

		try {
			new $component_name(null, null);
		} catch (Throwable $e) {
			ob_end_clean();
		}
	}

	/**
	 * Render site footer method
	 */
	private function renderSiteFooter(): void {
		ob_start();

		try {
			new SiteFooter(null, null, false, $this->scripts);
		} catch (Throwable $e) {
			ob_end_clean(); ?>
				<footer class="site-footer">
					<div class="footer-content">
						<div class="slot start"></div>
						<div class="slot center">
							<nav class="footer-menu">
								<ul class="nav-menu">
									<li class="menu-item">
										<a class="menu-item-link" href="<?php echo BASE_URL; ?>/impressum">Impressum</a>
									</li>
									<li class="menu-item">
										<a class="menu-item-link" href="<?php echo BASE_URL; ?>/datenschutz">Datenschutz</a>
									</li>	
								</ul>
							</nav> 
						</div>
						<div class="slot end"></div>
					</div>
				</footer>
				<?php $this->renderScriptTags(); ?>
			</body>
			</html>
		<?php
		}
	}

	/**
	 * Render error traceback method
	 *
	 * @return string|null Formatted traceback string, null if no trace exists
	 */
	private function getTraceback(): string|null {
		if (!$this->trace) {
			return null;
		}

		$traceString = array_map(
			fn($entry, $key) => '<span class="index">#' .
				$key .
				'</span> <span class="file">' .
				implode('/<wbr>', explode('/', $entry['file'])) .
				'</span><span class="line">(' .
				$entry['line'] .
				')</span>: ' .
				(array_key_exists('class', $entry)
					? '<span class="class">' . $entry['class'] . '</span>'
					: '') .
				(array_key_exists('type', $entry)
					? '<span class="type">' . $entry['type'] . '</span>'
					: '') .
				'<span class="function">' .
				$entry['function'] .
				'</span>',
			$this->trace,
			array_keys($this->trace)
		);

		return '<span class="entry">' .
			implode('</span><span class="entry">', $traceString) .
			'</span>';
	}

	/**
	 * Render method
	 *
	 * Renders provided template
	 */
	protected function render(): void {
		$props = [
			'code' => $this->code,
			'heading' => $this->title,
			'message' => $this->message,
			'trace' => $this->trace ? $this->getTraceback() : null,
			'buttons' => $this->buttons
		]; ?>
		<!DOCTYPE html>
		<html lang="<?php echo $this->language; ?>">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title><?php echo $this->title; ?> | <?php echo SITE_TITLE; ?></title>
			<?php if ($this->description): ?>
			<meta name="description" content="<?php echo $this->description; ?>">
			<?php endif; ?>
			<?php $this->renderStyleTags(); ?>
		</head>
		<body class="has-error">
			<input type="checkbox" id="mobile-menu-checkbox">
			<header class="site-header has-error">
				<div class="slot start">
					<?php $this->renderMenu('HeaderMenu'); ?> 
				</div>
				<div class="slot center">
					<a class="home-link" href="<?php echo BASE_URL; ?>">
						<svg xmlns="http://www.w3.org/2000/svg" class="logo" style="width: 6.75rem;" role="img" aria-labelledby="site-logo-title" viewBox="0 0 256 45.1">
							<title id="site-logo-title">Zur Startseite</title>
							<polygon id="N_1" class="letters" points="24.92 .8 24.92 27.83 8.83 .8 0 .8 0 44.91 9.22 44.91 9.22 17.95 25.25 44.91 34.15 44.91 34.15 .8 24.92 .8" />
							<path id="O" class="letters" d="M53.13,22.22c0,9.63,3.28,14.73,9.71,14.73s9.97-5.17,9.97-14.8c0-8.21-3.02-14.02-9.84-14.02-6.24,0-9.84,4.85-9.84,14.08M81.94,22.03c0,13.7-6.43,23.06-19.1,23.06s-18.84-9.11-18.84-22.87S51.07,0,62.97,0c12.8,0,18.97,10.14,18.97,22.03" />
							<path id="R" class="letters" d="M100.21,9.11v11.18h10.68c3.73,0,5.4-3.16,5.4-5.49,0-2.46-1.67-5.68-5.4-5.68h-10.68ZM110.95.77c10.35,0,14.47,7.88,14.47,14.09,0,4.33-2.25,9.69-7.52,12.21l9.97,17.25h-10.48l-8.87-15.76h-8.3v15.76h-9.07V.77h19.81Z" />
							<path id="D" class="letters" d="M144.21,8.91v27.27h7.65c6.62,0,9.97-4.72,9.97-14.22,0-8.01-3.34-13.05-9.97-13.05h-7.65ZM151.86.77c12.6,0,19.1,9.17,19.1,21.06,0,13.7-6.49,22.48-19.1,22.48h-16.72V.77h16.72Z" />
							<polygon id="E" class="letters" points="211.36 9.11 189.49 9.11 189.49 18.09 207.95 18.09 207.95 26.42 189.49 26.42 189.49 35.99 211.36 35.99 211.36 44.32 180.43 44.32 180.43 .77 211.36 .77 211.36 9.11" />
							<polygon id="N_2" class="letters" points="256 44.32 247.25 44.32 231.5 17.7 231.5 44.32 222.43 44.32 222.43 .77 231.11 .77 246.93 27.46 246.93 .77 256 .77 256 44.32" />
						</svg>
					</a>
				</div>
				<div class="slot end">
					<?php $this->renderMenu('ContactMenu'); ?> 
				</div>
			</header>
			<main>
				<?php include_once $this->template; ?>
			</main>
			<?php $this->renderSiteFooter(); ?>
	<?php
	}
}
