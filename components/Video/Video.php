<?php

declare(strict_types=1);

/**
 * Video component
 *
 * Renders video using provided props
 */
class Video extends PHTMLComponent {
	private string $src;
	private string $aspectRatio;
	private ?string $placeholder;
	private ?string $mobileSrc;
	private ?string $alt;
	private bool $lazyLoaded;
	private bool $muted;
	private bool $loop;
	private bool $controls;
	private ?string $mobilePlaceholder;
	private ?string $mobileAspectRatio;
	private int $breakpoint;

	public function __construct(
		?string $class_name,
		string $src,
		string $aspect_ratio,
		string $placeholder,
		string $alt = null,
		bool $lazy_loaded = false,
		bool $autoplay = false,
		bool $muted = false,
		bool $loop = false,
		bool $controls = true,
		string $mobile_src = null,
		string $mobile_aspect_ratio = null,
		string $mobile_placeholder = null,
		int $breakpoint = 600
	) {
		$this->id = 'video-' . rand(1000000, 9999999);

		$this->src = sanitize_uri($src);

		$this->placeholder = sanitize_uri($placeholder);

		if (
			!file_exists(BASE_DIR . $this->src) ||
			!file_exists(BASE_DIR . $this->placeholder)
		) {
			return;
		}

		$this->alt = $alt;

		$this->lazyLoaded = $lazy_loaded;

		$this->muted = $muted;
		$this->loop = $loop;
		$this->controls = $controls;

		$this->aspectRatio = $aspect_ratio;

		$this->mobileSrc =
			$mobile_src && file_exists(BASE_DIR . sanitize_uri($mobile_src))
				? sanitize_uri($mobile_src)
				: null;

		$this->mobileAspectRatio = $mobile_aspect_ratio;

		$this->mobilePlaceholder =
			$mobile_placeholder &&
			file_exists(BASE_DIR . sanitize_uri($mobile_placeholder))
				? sanitize_uri($mobile_placeholder)
				: null;

		$this->breakpoint = $breakpoint;

		parent::__construct(
			$this->id,
			$class_name .
				($lazy_loaded ? ' lazy' : '') .
				($autoplay ? ' autoplay' : '')
		);
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

		array_push($sources, [
			'src' => $this->src,
			'type' => mime_content_type(BASE_DIR . $this->src)
		]);

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
		echo 'alt="' .
			($this->alt ?? 'Video') .
			'" ' .
			($this->muted ? 'muted ' : '') .
			($this->loop ? 'loop ' : '') .
			($this->controls ? ' controls' : '');
	}

	private function renderStyleTag() {
		echo '<style>#' .
			$this->id .
			'>video{aspect-ratio:' .
			$this->aspectRatio .
			';}' .
			($this->mobileAspectRatio
				? '@media screen and (max-width: ' .
					$this->breakpoint .
					'px){#' .
					$this->id .
					'>video{aspect-ratio:' .
					$this->mobileAspectRatio .
					';}'
				: '') .
			'</style>';
	}

	protected function render() {
		?>
        <div <?php $this->renderHTMLAttributes(); ?>>
            <video <?php $this->renderVideoAttributes(); ?>>
                <?php $this->renderSourceElements(); ?>
            </video>
			<?php new Image(
   	null,
   	'video-placeholder',
   	$this->placeholder,
   	($this->alt ? $this->alt . ' ' : '') . 'Placeholder Image',
   	$this->lazyLoaded,
   	$this->mobilePlaceholder
   ); ?>
            <?php $this->renderStyleTag(); ?>
        </div>
    <?php
	}
}
