<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "header" tag.
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-simple-flex
 * @package WP Simple Flex
 * @subpackage WP Simple Flex
 * @since 1.0.0
 */
  
?><!doctype html>
<html <?= $a=(isset($_GET['amp']))?'amp':'' ?> <?php language_attributes(); ?>>
  <head>
    <?php get_template_part( 'template-parts/header/header', 'meta' ); ?>
    <?= $url = (!isset($_GET['amp'])) ? '<link rel="amphtml" href="' . get_permalink() . '?amp" />' : '' ?>
    <?php if(isset($_GET['amp'])){ ?>
      <style amp-custom>@import url('<?= get_template_directory_uri() ?>/css/main.min.css');</style><noscript>
      <style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <?php }else{ ?>
      <link rel="stylesheet" media="screen" type="text/css" href="<?= get_template_directory_uri() ?>/css/main.min.css?ver=1.2.0"/>
    <?php } ?>
    p
    
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
  </head>
  <body>
    <header>
      <?php get_template_part( 'template-parts/header/header', 'navigation' ); ?>
    </header>