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
	private ?string $labelText;
	private ?string $separatorText;

	public function __construct(
		?string $id,
		?string $class_name,
		array $items,
		string $label_color_class,
		string $item_color_class,
		?string $label_text = null,
		?string $separator_text = ' — '
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
		$this->labelText = is_string($label_text) ? $label_text : null;
		$this->separatorText = is_string($separator_text) ? $separator_text : null;

		parent::__construct($id, $class_name);
	}

	protected function render() {
		if (empty($this->items)) {
			return;
		}
		?>
		<div <?php $this->renderHTMLAttributes(); ?>>
			<?php
			$labelText = $this->labelText ?? 'Unsere Leistungen:';
			if ($labelText !== ''): ?>
				<p class="banner-label <?php echo $this->labelColorClass; ?> is-bold is-uppercase">
					<?php echo htmlspecialchars($labelText, ENT_QUOTES, 'UTF-8'); ?>
				</p>
			<?php endif; ?>
			<div class="animated-banner-track <?php echo $this->itemColorClass; ?>">
				<?php
				$renderLoop = function () {
					$itemsCount = count($this->items);
					foreach ($this->items as $idx => $item) {
						echo '<span class="banner-item">' .
							htmlspecialchars($item, ENT_QUOTES, 'UTF-8') .
							'</span>';
						if ($this->separatorText !== '') {
							$sep = $this->separatorText ?? ' — ';
							echo '<span class="banner-separator">' .
								htmlspecialchars($sep, ENT_QUOTES, 'UTF-8') .
								'</span>';
						}

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

