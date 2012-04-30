<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<ul class="<?php print $class; ?>"<?php print $attributes; ?>>
    <?php foreach ($rows as $row_number => $columns): ?>
      <span class="<?php print $row_classes[$row_number]; ?> clearfix">
        <?php foreach ($columns as $column_number => $item): ?>
          <li class="<?php print $column_classes[$row_number][$column_number]; ?>">
            <?php print $item; ?>
          </li>
        <?php endforeach; ?>
      </span>
    <?php endforeach; ?>
</ul>