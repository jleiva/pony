<?php
// Use a helper variable, so we use less code to create the html tag below.
$html_attributes = 'lang="' . $language->language . '" dir="' . $language->dir . '"';

?>
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (lte IE 6)&(!IEMobile)]><html class="ie6 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="ie7 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 8)&(!IEMobile)]><html class="ie8 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <meta name="HandheldFriendly" content="true">
  <meta name="MobileOptimized" content="width">
  <meta name="viewport" content="width=device-width, target-densityDpi=160dpi, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php print $styles; ?>

  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php print $scripts; ?>
  <script type="text/javascript" src="http://use.typekit.com/fzk4zqi.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
  <script type="text/javascript" src="http://use.typekit.com/loy0bpz.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  <!--[if (lt IE 9) & (!IEMobile)]>
  <script src="<?php print $base_path; ?>/sites/all/themes/jensimmons/js/libs/DOMAssistantCompressed-2.8.js"></script>
  <script src="<?php print $base_path; ?>/sites/all/themes/jensimmons/js/libs/selectivizr-1.0.1.js"></script>
  <script src="<?php print $base_path; ?>/sites/all/themes/jensimmons/js/libs/respond.min.js"></script>
  <![endif]-->
  
  <!-- Prompts all IE6 users to install Google Chromeframe -->
  <!--[if lt IE 7 ]> 
   <script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
   <script>CFInstall.check();</script>
  <![endif]-->

</body>
</html>
