<div class="error-info <?php echo ENV; ?>">
    <p class="error-subheading text-style-subline color-primary">
        Error 
        <?php echo $props['code']; ?>
    </p>
    <h1 class="error-heading"><?php echo $props['heading']; ?></h1>
    <p class="error-message"><?php echo $props['message']; ?></p>
    <?php
    if (!empty($props['buttons'])): ?>
    <div class="error-buttons">
        <?php foreach ($props['buttons'] as $button): ?>
        <a class="button text-style-button primary no-min-width no-min-width" href="<?php echo $button[
        	'link'
        ]; ?>">
            <?php echo $button['text']; ?>
        </a>
        <?php endforeach; ?>
    </div>
    <?php endif;
    if ($props['trace']): ?>
    <h2 class="error-trace-heading">Traceback:</h2>
    <pre class="error-trace"><?php echo $props['trace']; ?></pre>
    <?php endif;
    ?>
</div>