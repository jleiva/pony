<?php

/**
 * @file
 * Default theme implementation to display a region.
 */
?>
<?php if ($content): ?>
  <div id="<?php print $region; ?>" class="<?php print $classes; ?> clearfix">
    <div class="inner clearfix">
      <?php print $content; ?>
    </div>
  </div>
<?php endif; ?>
