<?php

declare(strict_types=1);

class ClientList extends PHTMLComponent {
	private ClientModel $model;
	private array $clients;

	public function __construct(?string $id, ?string $class_name) {
		$this->model = new ClientModel();
		$this->clients = $this->model->getClients() ?? [];

		parent::__construct($id, $class_name);
	}

	public function render() {
		?>
        <div <?php $this->renderHTMLAttributes(); ?>>
            <?php
            $counter = 0;
            foreach ($this->clients as $client):
            	$counter += 1; ?>
                <a class="client-link" target="_blank"
                href="<?php echo $client['link'] ?? '#'; ?>"><?php echo $client[
	'nicename'
] ?? 'Missing client name'; ?></a>
                <?php echo $counter < count($this->clients)
                	? ' / <wbr>'
                	: ''; ?>
            <?php
            endforeach;?>
            <div class="dots" aria-hidden="true">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
	<?php
	}
}
