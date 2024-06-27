<?php

declare(strict_types=1);

/**
 * Video component
 *
 * Renders video using provided props
 */
class Video extends PHTMLComponent {
	private string $src;
	private ?string $mobileSrc;
	private bool $lazyLoaded;
	private bool $autoplay;
	private bool $muted;
	private bool $loop;
	private bool $controls;
	private ?string $placeholder;
	private ?string $mobilePlaceholder;
	private int $breakpoint;

	public function __construct(
		?string $id,
		?string $class_name,
		string $src,
		bool $lazy_loaded = false,
		bool $autoplay = false,
		bool $muted = false,
		bool $loop = false,
		bool $controls = true,
		string $mobile_src = null,
		string $placeholder = null,
		string $mobile_placeholder = null,
		int $breakpoint = 600
	) {
		$this->src = sanitize_uri($src);

		if (!file_exists(BASE_DIR . $this->src)) {
			return;
		}

		$this->mobileSrc = $mobile_src ? sanitize_uri($mobile_src) : null;

		$this->lazyLoaded = $lazy_loaded;

		$this->autoplay = $autoplay;
		$this->muted = $muted;
		$this->loop = $loop;
		$this->controls = $controls;

		$this->placeholder = $placeholder ? sanitize_uri($placeholder) : null;

		$this->mobilePlaceholder = $mobile_placeholder
			? sanitize_uri($mobile_placeholder)
			: null;

		$this->breakpoint = $breakpoint;

		parent::__construct($id, $class_name . ($lazy_loaded ? ' lazy' : ''));
	}

	private function renderSourceElements() {
		$sources =
			$this->mobileSrc && file_exists(BASE_DIR . $this->mobileSrc)
				? [
					[
						'src' => $this->mobileSrc,
						'type' => mime_content_type(
							BASE_DIR . $this->mobileSrc
						),
						'media' =>
							'media="(max-width: ' . $this->breakpoint . 'px)"'
					]
				]
				: [];

		if ($this->mobileSrc && file_exists(BASE_DIR . $this->mobileSrc)) {
			array_push($sources, [
				'src' => $this->src,
				'type' => mime_content_type(BASE_DIR . $this->src)
			]);
		}

		foreach ($sources as $source) { ?>
            <source <?php echo ($this->lazyLoaded ? 'data-src' : 'src') .
            	'="' .
            	ASSET_BASE_URL .
            	$source['src'] .
            	'"'; ?>
            type="<?php echo $source['type']; ?>" 
            <?php echo array_key_exists('media', $source)
            	? $source['media']
            	: ''; ?>>
		<?php }
	}

	private function renderVideoAttributes() {
		echo ($this->autoplay ? 'autoplay ' : '') .
			($this->muted ? 'muted ' : '') .
			($this->loop ? 'loop ' : '') .
			($this->controls ? ' controls' : '');
	}

	protected function render() {
		?>
        <div <?php $this->renderHTMLAttributes(); ?>>
            <video <?php $this->renderVideoAttributes(); ?>>
                <?php $this->renderSourceElements(); ?>
            </video>
        </div>
    <?php
	}
}
