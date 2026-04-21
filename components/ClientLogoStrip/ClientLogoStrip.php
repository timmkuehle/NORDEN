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
				$title = isset($client['nicename'])
					? 'Website ansehen: ' . $client['nicename']
					: 'Kunden-Website ansehen';

				$is_internal = isset($client['project_slug']) && $client['project_slug'];
				$href = $is_internal
					? BASE_URL . sanitize_uri($client['project_slug'])
					: ($client['link'] ?? '#');
				$title = $is_internal
					? (isset($client['nicename'])
						? 'Projekt ansehen: ' . $client['nicename']
						: 'Projekt ansehen')
					: $title; ?>
                <a class="client-logo-link"
					<?php if (!$is_internal): ?>target="_blank"<?php endif; ?>
					href="<?php echo $href; ?>">
                    <?php if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                    	new Svg(null, null, $client['logo'], $title);
                    } else {
                    	new Image(null, null, $client['logo'], $title);
                    } ?>
                </a>
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
