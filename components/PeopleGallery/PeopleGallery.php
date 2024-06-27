<?php

declare(strict_types=1);

class PeopleGallery extends PHTMLComponent {
	private array $people;

	public function __construct(
		?string $id,
		?string $class_name,
		array $people = []
	) {
		$this->people = $people;

		parent::__construct($id, $class_name);
	}

	private function renderGallery(): void {
		foreach ($this->people as $person) { ?>
			<article class="person">
				<?php new Image(
    	null,
    	'person-image',
    	$person['image'],
    	'Bild von ' . $person['name'],
    	true
    ); ?>
				<h3 class="person-name"><?php echo $person['name']; ?></h3>
			</article>
		<?php }
	}

	public function render() {
		?>
        <section <?php $this->renderHTMLAttributes(); ?>>
            <?php $this->renderGallery(); ?>
        </section>
	<?php
	}
}
