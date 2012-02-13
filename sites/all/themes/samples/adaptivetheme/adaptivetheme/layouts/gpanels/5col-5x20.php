<?php
/**
 * Gpanels are drop in multi-column snippets for displaying blocks.
 * Most Gpanels are stacked, meaning they have top and bottom regions
 * by default, however you do not need to use them. You should always
 * use all the horizonal regions or you might experience layout issues.
 *
 * How to use:
 * 1. Copy and paste the code snippet into your page.tpl.php file.
 * 2. Copy and paste the region definitions to your themes .info file.
 * 3. Clear the cache (in Performance settings) to refresh the theme registry.

Region Deinitions:

; 5 col
regions[five_first]  = 5col Gpanel - 1
regions[five_second] = 5col Gpanel - 2
regions[five_third]  = 5col Gpanel - 3
regions[five_fourth] = 5col Gpanel - 4
regions[five_fifth]  = 5col Gpanel - 5

 */
?>
<!-- Five column Gpanel -->
<?php if (
  $page['five_first'] ||
  $page['five_second'] ||
  $page['five_third'] ||
  $page['five_fourth'] ||
  $page['five_fifth']
): ?>
  <div class="at-panel five-5x20 multicolumn clearfix">
    <?php print render($page['five_first']); ?>
    <?php print render($page['five_second']); ?>
    <?php print render($page['five_third']); ?>
    <?php print render($page['five_fourth']); ?>
    <?php print render($page['five_fifth']); ?>
  </div>
<?php endif; ?>
