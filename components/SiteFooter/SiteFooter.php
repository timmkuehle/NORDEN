<?php

declare(strict_types=1);

/**
 * Site Footer component
 *
 * Renders HTML footer tag using provided props
 */
class SiteFooter extends PHTMLComponent {
	private bool $noScripts;
	private array $scripts;

	public function __construct(
		?string $id,
		?string $class_name,
		bool $no_scripts = false,
		array $scripts = []
	) {
		$this->noScripts = $no_scripts;

		if (!$this->noScripts) {
			$this->scripts = $scripts ?? [];
		}

		parent::__construct($id, $class_name);
	}

	protected function render() {
		$in_link = 'https://at.linkedin.com/company/norden-werbeagentur';
		$fb_link = 'https://www.facebook.com/norden.agency/';
		$ig_link = 'https://www.instagram.com/norden_werbeagentur/';
		?>
		<footer <?php $this->renderHTMLAttributes(); ?>>
			<div class="footer-content">
				<div class="slot start">
					<p class="slash" aria-hidden="true">/</p>
					<a href="<?php echo BASE_URL; ?>/kontakt" class="contact-link">Nach NORDEN</a>
					<div class="social-media-buttons">
						<?php new SocialMediaLink(null, null, 'linkedin', $in_link); ?>
	 					<?php new SocialMediaLink(null, null, 'facebook', $fb_link); ?>
	 					<?php new SocialMediaLink(null, null, 'instagram', $ig_link); ?>
					</div>
				</div>
				<div class="slot center">
					<h2 class="footer-heading uppercase">Let's work together</h2>
					<?php new FooterMenu(null, null); ?>
				</div>
				<div class="slot end">
					<div class="footer-buttons">
						<?php new Button(null, null, 'Say hi', 'mailto:mail@norden.co'); ?>
						<?php new Button(
      	null,
      	null,
      	'Give us a call',
      	'tel:+43512935681',
      	'secondary'
      ); ?>
					</div>
				</div>
			</div>
		</footer>
		<?php if (!$this->noScripts) {
  	new HtmlEnd($this->scripts);
  }
	}
}
