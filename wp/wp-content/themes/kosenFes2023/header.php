<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="EbinaKai">
  <title><?php titles(''); ?></title>
  <link rel="icon" href="<?php bloginfo("template_url"); ?>/favicon.ico">
  <meta name="description" content="<?php bloginfo("description") ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">
  
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body>
  <div id="wrapper">
    <header class="sticky-top">
      <div class="header-inner d-flex align-items-center justify-content-between">
        <h1>
          <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="宴">
          </a>
        </h1>
        <input type="checkbox" id="overlay-input" />
        <label for="overlay-input" id="overlay-button"><span></span></label>
        <nav id="overlay">
        <ul class="mb-0">
          <li <?php if (is_home()) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/">ホーム</a></li>
          <li <?php if (is_page('greeting')) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/greeting">ご挨拶</a></li>
          <li <?php if (is_page('shops')) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/shops">出店一覧</a></li>
          <li <?php if (is_page('events')) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/events">企画一覧</a></li>
          <li <?php if (is_page('access')) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/access">アクセス</a></li>
          <li <?php if (is_page('news')) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/news">ニュース</a></li>
          <li <?php if (is_page('qa')) echo ' class="current-menu-item"'; ?>><a href="<?php bloginfo('url'); ?>/qa">Q&A</a></li>
        </ul>
        </nav>
      </div>
    </header>
    
    <main>