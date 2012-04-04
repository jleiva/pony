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
  
  <!--[if lt IE 9]> <! this one is from Zen. See what John is up to. Shiv + respond? -->
    <!-- <script src="<?php print $base_path . $path_to_theme; ?>/js/html5-respond.js"></script> -->
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Gudea|Crimson+Text' rel='stylesheet' type='text/css'>

  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="<?php print $base_path . $path_to_theme; ?>/js/ie/imgsizer.js"></script>
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



