<!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <meta name="viewport" content="width=device-width, target-densityDpi=160dpi, initial-scale=1">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- Type from Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css' />

  <?php print $styles; ?>
  <?php print $scripts; ?>
    
<!--[if IE]>
  <link href="<?php print $base_path . $path_to_theme; ?>/css/ie.css" rel="stylesheet" />
<![endif]-->
<!--[if lt IE 8]>
  <link href="<?php print $base_path . $path_to_theme; ?>/css/ie-old.css" rel="stylesheet" />
  <script src="<?php print $base_path . $path_to_theme; ?>/js/html5.js"></script>
<![endif]-->
    
</head>

<body id="index" class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>





