<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2BHS48RQEL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2BHS48RQEL');
  </script>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--::::::::::::::::::::::::::::::::::::::::::::
    Font
  :::::::::::::::::::::::::::::::::::::::::::::::-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <!--::::::::::::::::::::::::::::::::::::::::::::
    CSS
  :::::::::::::::::::::::::::::::::::::::::::::::-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/main.css">
  <!--::::::::::::::::::::::::::::::::::::::::::::
    Google search console
  :::::::::::::::::::::::::::::::::::::::::::::::-->
  <meta name="google-site-verification" content="ajzM3eo8zQuVyQs5Vooriea77Mqx2fEHWyvkoXqvc6I" />
</head>