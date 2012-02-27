<?php
/**
 * @file field--fences-del.tpl.php
 * Wrap each field value in the <del> element.
 *
 * @see http://developers.whatwg.org/edits.html#the-del-element
 */
?>
<?php if ($element['#label_display'] == 'inline'): ?>
  <span class="field-label"<?php print $title_attributes; ?>>
    <?php print $label; ?>:
  </span>
<?php elseif ($element['#label_display'] == 'above'): ?>
  <h3 class="field-label"<?php print $title_attributes; ?>>
    <?php print $label; ?>
  </h3>
<?php endif; ?>

<?php foreach ($items as $delta => $item): ?>
  <del class="<?php print $classes; ?> field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $attributes; ?>>
    <?php print render($item); ?>
  </del>
<?php endforeach; ?>