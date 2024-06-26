<?php

declare(strict_types=1);

/**
 * Social media link component
 *
 * Renders Social media link using provided props
 */
class SocialMediaLink extends PHTMLComponent {
	private array $icons = [
		'linkedin' => [
			'description' => 'Folge uns auf LinkedIn',
			'path' =>
				'M577,580.5h-94.1v-6.5c0-50.5.4-101-.2-151.6-.1-13.5-1.7-27.3-5-40.4-5.5-21.8-20.4-32.2-42.9-32.8-35.6-.9-56.7,17.7-60.4,54.7-1.6,15.8-1.5,31.7-1.6,47.6-.2,41.1,0,82.3,0,123.5v5.3h-92.3v-307.2h92.2v39.3c6.1-6.9,11-13.5,17.1-19,15.9-14.4,34.9-22.1,56-24.8,18.8-2.4,37.5-1.4,55.8,2.9,35,8.1,56.8,30.2,66.8,64.3,6.4,21.7,8.4,44,8.5,66.4.2,57.2.1,114.5.2,171.7v6.6h0ZM219.8,273.2v307h-94.9v-307h94.9ZM173.9,230.8c-30.7.1-56.1-25-56.3-55.7-.2-30.6,24.8-55.9,55.7-56.3,30.5-.4,56.1,24.9,56.3,55.7.3,30.5-25.1,56.2-55.7,56.3h0ZM591.5,699.8H108.3c-59.7,0-108.3-48.6-108.3-108.3V108.3C0,48.6,48.6,0,108.3,0h483.2c59.7,0,108.3,48.6,108.3,108.3v483.2c0,59.7-48.6,108.3-108.3,108.3ZM108.3,60c-26.6,0-48.3,21.7-48.3,48.3v483.2c0,26.6,21.7,48.3,48.3,48.3h483.2c26.6,0,48.3-21.7,48.3-48.3V108.3c0-26.6-21.7-48.3-48.3-48.3H108.3Z'
		],
		'facebook' => [
			'description' => 'Folge uns auf Facebook',
			'path' =>
				'M591.5,0H108.3C48.6,0,0,48.6,0,108.3v483.2c0,59.7,48.6,108.3,108.3,108.3h483.2c59.7,0,108.3-48.6,108.3-108.3V108.3c0-59.7-48.6-108.3-108.3-108.3ZM639.8,591.5c0,26.6-21.7,48.3-48.3,48.3h-114.3v-198.1c0-9.1,0-18.3,0-27.4,0-9.1-.2-18.1.2-27.5h25.2c8.4,0,16.8,0,25.2,0,8.2,0,16.4.4,24.7-.3,3.3-31.8,6.6-63.1,10-94.9h-4.9c-25.3,0-50.6,0-75.9,0-1.4,0-2.8-.1-4.5-.2v-4.1c0-14.9,0-29.9.1-44.8,0-4.2.3-8.4.7-12.5,1.2-12.4,7.1-19.1,19.2-21.6,4.9-1,10-1.5,15-1.5,14.9-.2,29.8,0,44.8,0,1.4,0,2.9-.1,4.2-.2.8-3.9.7-92-.2-95.4h-4.6c-21,0-41.9-.1-62.9,0-10.2,0-20.5.6-30.7,1.3-11.2.8-22.2,3.1-32.8,6.8-26.4,8.9-45.3,25.9-55.8,51.9-5.1,12.5-8.1,25.6-9.1,39.1-.9,11.4-1.2,22.9-1.3,34.4-.2,14.2,0,28.4,0,42.6,0,1.4-.2,2.8-.3,4.4h-55.3c-1,4.1-.9,92.1.1,95.2h41.3c4.6,0,9.3,0,14.3,0v252.9H108.3c-26.6,0-48.3-21.7-48.3-48.3V108.3c0-26.6,21.7-48.3,48.3-48.3h483.2c26.6,0,48.3,21.7,48.3,48.3v483.2Z'
		],
		'instagram' => [
			'description' => 'Folge uns auf Instagram',
			'path' =>
				'M502.9,699.8H196.9C88.3,699.8,0,611.5,0,502.9V196.9C0,88.3,88.3,0,196.9,0h305.9c108.6,0,196.9,88.3,196.9,196.9v305.9c0,108.6-88.3,196.9-196.9,196.9ZM196.9,60c-75.5,0-136.9,61.4-136.9,136.9v305.9c0,75.5,61.4,136.9,136.9,136.9h305.9c75.5,0,136.9-61.4,136.9-136.9V196.9c0-75.5-61.4-136.9-136.9-136.9H196.9ZM540.3,119.7c23.1,0,41.8,18.7,41.8,41.8s-18.7,41.9-41.8,41.9-41.9-18.7-41.9-41.9,18.7-41.8,41.9-41.8ZM350,531c-99,0-179.5-80.5-179.5-179.5s80.5-179.5,179.5-179.5,179.5,80.5,179.5,179.5-80.5,179.5-179.5,179.5ZM350,231.9c-65.9,0-119.5,53.6-119.5,119.5s53.6,119.5,119.5,119.5,119.5-53.6,119.5-119.5-53.6-119.5-119.5-119.5Z'
		]
	];
	private string $requestedIcon;
	private string $link;

	public function __construct(
		?string $id,
		?string $class_name,
		string $icon,
		string $link
	) {
		$this->requestedIcon = $icon;
		$this->link = $link;

		parent::__construct($id, $class_name);
	}

	private function renderIcon(): void {
		$icon = $this->icons[$this->requestedIcon]; ?>
		<svg class="social-media-icon" aria-labelledby="social-media-icon-title-<?php echo $this->requestedIcon; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 700">
			<title id="social-media-icon-title-<?php echo $this->requestedIcon; ?>">
				<?php echo $icon['description']; ?>
			</title>
            <path d="<?php echo $icon['path']; ?>" />
        </svg>
	<?php
	}

	protected function render() {
		?>
        <a <?php $this->renderHTMLAttributes(); ?> href="<?php echo $this->link; ?>" target="_blank" rel="noopener noreferrer">
			<?php $this->renderIcon(); ?>
		</a>
    <?php
	}
}
