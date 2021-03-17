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
  
?>
<?php // ob_start("minifier"); ?> 
<!doctype html>
<html <?= $a=(isset($_GET['amp']))?'amp':'' ?> lang="<?= get_locale(); ?>">
  <head>
    
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="google-site-verification" content="VlnyYoL6EdHH99TjzUjMI6tiUzIfjQ6kgouxUPyelN0" />
    <?php get_template_part( 'template-parts/header/header', 'meta' ); ?>
    <?= $url = (!isset($_GET['amp'])) ? '<link rel="amphtml" href="' . get_permalink() . '?amp" />' : '' ?>
    <?php if(isset($_GET['amp'])){ ?>
      <style amp-custom><?php include 'main.css'; ?></style>
      <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <?php }else{ ?>
      <link rel="stylesheet" media="screen" type="text/css" href="<?= get_template_directory_uri() ?>/css/main.min.css?ver=1.10"/>
    <?php } ?>
  </head>
  <body>
    <header>
      <?php get_template_part( 'template-parts/header/header', 'navigation' ); ?>
    </header>