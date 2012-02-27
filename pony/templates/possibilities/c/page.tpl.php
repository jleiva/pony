<div id="page">
  <header id="header" class="clearfix" role="banner">

		<hgroup class="inner clearfix">
      <?php if ($logo): ?>
        <h1 id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" >
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </h1>
      <?php endif; ?>
      
      <?php print render($page['mobile-navigation']); ?>

      <?php if ($main_menu): ?>
        <nav id="navmobile" class="inner" role="navigation">
  				<a id="navlinks" class="button" href="#">Navigation</a>
  				<div id="navdrop">
            <?php print render($main_menu_expanded); ?> 
  				</div>
        </nav>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
          <?php if ($site_name): ?>
            <h2 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h3>
          <?php endif; ?>
  
          <?php if ($site_slogan): ?>
            <h3 id="site-slogan"><?php print $site_slogan; ?></h3>
          <?php endif; ?>
      <?php endif; ?>

    </hgroup><!-- /#name-and-slogan -->

    <?php print render($page['header']); ?>

    <?php if ($main_menu): ?>
      <nav id="main-navigation" class="inner" role="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>
        		
	</header>


  <div id="wrapper" class="clearfix">

    <?php print render($page['sub_navigation']); ?>

    <div id="main" class="inner clearfix">
  
      <div id="content" class="column" role="main">
        <?php print render($page['highlighted']); ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
        <?php print $breadcrumb; ?>
  
      </div><!-- /#content -->
  
      <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first  = render($page['sidebar_first']);
        $sidebar_second = render($page['sidebar_second']);
      ?>
  
      <?php if ($sidebar_first || $sidebar_second): ?>
        <aside class="sidebars">
          <?php print $sidebar_first; ?>
          <?php print $sidebar_second; ?>
        </aside><!-- /.sidebars -->
      <?php endif; ?>
  
    </div><!-- /#main -->

    <?php print render($page['footer']); ?>

  </div><!-- /#wrapper -->

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
