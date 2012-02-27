
<header class="banner clearfix" role="banner">

  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>

  <div id="name-and-slogan" class="element-invisible">
    <?php if ($title): ?>
      <div id="site-name"><strong>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
      </strong></div>
    <?php else: /* Use h1 when the content title is empty */ ?>
      <h1 id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
      </h1>
    <?php endif; ?>

    <div id="site-slogan"><?php print $site_slogan; ?></div>
  </div><!-- /#name-and-slogan -->

  <?php print render($page['header']); ?>

</header>

<div class="main-wrapper">
  <div class="main clearfix" role="main">
    <?php if($page['highlighted']): ?>
      <section class="intro clearfix">
        <?php print render($page['highlighted']); ?>
      </section>
    <?php endif; ?>

    <?php print $breadcrumb; ?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php if ($tabs = render($tabs)): ?>
      <div class="tabs"><?php print $tabs; ?></div>
    <?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>

  </div><!-- /.main -->

  <?php
    // Check to see if there is content in the complementary panel region.
    // This variable is rendered in $page['content'] and is stored in
    // drupal_static in the template files in layouts/ directory.
    $panel_region =& drupal_static('complementary_panel_region', '');
    if ($page['complementary'] || $panel_region):
  ?>
    <section role="complementary">
      <div class="complementary-wrapper clearfix">
        <?php print render($page['complementary']); ?>
        <?php print $panel_region; ?>
      </div>
    </section>
  <?php endif; ?>

</div><!-- /.main-wrapper -->


<footer role="contentinfo">
  <div class="footer-inner clearfix">
    <?php print render($page['footer']); ?>
  </div>
</footer>

<?php print render($page['bottom']); ?>
