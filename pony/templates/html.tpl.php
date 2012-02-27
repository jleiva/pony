<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="ie6 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="ie7 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="ie8 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <meta name="viewport" content="width=device-width, target-densityDpi=160dpi, initial-scale=1">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_theme; ?>/js/ie/html5-shiv.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic,400,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,700italic,700,600italic,600,400italic' rel='stylesheet' type='text/css'>

  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php if ($skip_link_text && $skip_link_anchor): ?>
    <div id="skip-link">
      <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </div>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="<?php print $base_path . $path_to_theme; ?>js/ie/imgsizer.js"></script>
    <script src="<?php print $base_path . $path_to_theme; ?>/js/ie/selectivizr-min.js"></script>
    <script src="<?php print $base_path . $path_to_theme; ?>/js/ie/jquery-extra-selectors.js"></script>
  <![endif]-->
  
  <!-- Prompts all IE6 users to install Google Chromeframe -->
  <!--[if lt IE 7]>
   <script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
   <script>CFInstall.check();</script>
  <![endif]-->

</body>
</html>



