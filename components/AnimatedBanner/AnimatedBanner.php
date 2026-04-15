<?php

declare(strict_types=1);

/**
 * Animated banner component
 *
 * Reusable scrolling banner with a fixed label and configurable items + colors.
 */
class AnimatedBanner extends PHTMLComponent {
	private array $items;
	private string $labelColorClass;
	private string $itemColorClass;

	public function __construct(
		?string $id,
		?string $class_name,
		array $items,
		string $label_color_class,
		string $item_color_class
	) {
		$this->items = array_values(
			array_filter(
				array_map(
					fn($item) => is_string($item) ? trim($item) : '',
					$items
				),
				fn($item) => $item !== ''
			)
		);

		$this->labelColorClass = trim($label_color_class);
		$this->itemColorClass = trim($item_color_class);

		parent::__construct($id, $class_name);
	}

	protected function render() {
		if (empty($this->items)) {
			return;
		}
		?>
		<div <?php $this->renderHTMLAttributes(); ?>>
			<p class="banner-label <?php echo $this->labelColorClass; ?> is-bold is-uppercase">Unsere Leistungen:</p>
			<div class="animated-banner-track <?php echo $this->itemColorClass; ?>">
				<?php
				$renderLoop = function () {
					$itemsCount = count($this->items);
					foreach ($this->items as $idx => $item) {
						echo '<span class="banner-item">' .
							htmlspecialchars($item, ENT_QUOTES, 'UTF-8') .
							'</span>';

						echo '<span class="banner-separator"> — </span>';

						// Keep trailing separator for consistent spacing, matching existing markup.
						// (No-op; always printed.)
						if ($idx === $itemsCount - 1) {
							// end
						}
					}
				};

				// Render twice for seamless scrolling loop (matches previous manual duplication).
				$renderLoop();
				$renderLoop();
				?>
			</div>
		</div>
		<?php
	}
}

