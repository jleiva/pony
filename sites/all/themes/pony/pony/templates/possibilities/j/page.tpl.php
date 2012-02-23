<header role="banner" class="clearfix"><div class="inner">

  <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
  <?php endif; ?>

  <?php if ($site_name): ?>
    <h1 id="site-name">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
    </h1>
  <?php endif; ?>

  <?php print render($page['header']); ?>
  
</div></header> <!-- /header -->

<?php print $messages; ?>

  <div role="main">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links = render($action_links)): ?><ul class="action-links"><?php print $action_links; ?></ul><?php endif; ?>
    <?php print render($page['introduction']); ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  </div> <!-- /main -->
  
<?php print render($page['footer']); ?>

