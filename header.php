<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php get_template_part('config/css-js'); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="wrapper">
      <div id="header">
        <div id="title-bar">
          <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
          <div id="description"><?php bloginfo('description'); ?></div>
        </div>
        <div id="header-widgets-box">
          <?php if (function_exists('dynamic_sidebar')) : ?>
            <?php dynamic_sidebar('header-widgets'); ?>
          <?php endif; ?>
        </div>
      </div> <!-- end #header -->
      <div id="content">
