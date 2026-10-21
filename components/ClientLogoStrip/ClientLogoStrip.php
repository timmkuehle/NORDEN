<?php

declare(strict_types=1);

class ClientLogoStrip extends PHTMLComponent {
	private ClientModel $model;
	private array $clients;

	public function __construct(
		?string $id = null,
		?string $class_name = null
	) {
		$this->model = new ClientModel();

		$this->clients = $this->model->getClients() ?? [];

		parent::__construct($id, $class_name);
	}

	private function renderClientLogos(): void {
		foreach ($this->clients as $client) {
			if (
				isset($client['logo']) &&
				file_exists($file = BASE_DIR . sanitize_uri($client['logo']))
			) {
				$is_internal =
					isset($client['project_slug']) && $client['project_slug'];
				$title = isset($client['nicename'])
					? ($is_internal
						? 'Projekt ansehen: ' . $client['nicename']
						: $client['nicename'])
					: ($is_internal
						? 'Projekt ansehen'
						: 'Kunde');
				$tag = $is_internal ? 'a' : 'span';
				$href = $is_internal
					? ' href="' .
						BASE_URL .
						sanitize_uri($client['project_slug']) .
						'"'
					: '';
				?>
                <<?php echo $tag; ?> class="client-logo-link"<?php echo $href; ?>>
                    <?php if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                    	new Svg(null, null, $client['logo'], $title);
                    } else {
                    	new Image(null, null, $client['logo'], $title);
                    } ?>
                </<?php echo $tag; ?>>
        <?php
			}
		}
	}

	public function render() {
		?>
        <div <?php $this->renderHTMLAttributes(); ?>>
            <?php $this->renderClientLogos(); ?>
        </div>
    <?php
	}
}
