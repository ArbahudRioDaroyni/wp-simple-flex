<?php
/**
 * The template for displaying sidebar in all single posts and attachments
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-simple-flex
 * @package WP Simple Flex
 * @subpackage WP Simple Flex
 * @since 1.0.0
 */

get_header(); ?>

<aside class="featured full-width-3 pr-0">
  <h2 class="f-h mt-0">Tranding</h2>
  <hr class="h-line">
  <?php $posts_array = get_list_popular_posts(5);
  foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
    <a href="<?= get_the_permalink() ?>" class="f-lst">
      <div class="f-lst-box">
        <figure class="f-lst-img">
          <?php if (isset($_GET['amp'])) { ?>
            <amp-img src="<?= get_first_image_in_post() ?>" height='150' width='300' layout='responsive' alt="<?= get_the_title() ?>" ></amp-img>
          <?php }else{ ?>
            <img src="<?= get_default_image() ?>" data-src="<?= get_first_image_in_post() ?>" data-srcset="<?= get_first_image_in_post() ?> 1x, <?= get_first_image_in_post() ?> 2x" class="lazy img-full" alt="<?= get_the_title() ?>" />
          <?php } ?>
        </figure>
        <div class="f-lst-content">
          <h3 class="f-list-title"><?= get_the_title() ?></h3>
          <p class="f-lst-meta"><span class="f-lst-author"><?= get_the_author(); ?></span class="f-lst-category"> in <span><?= get_the_category()[0]->name ?></span></p>
          <time class="f-lst-footer" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('D, d F Y'); ?></time>
        </div>
      </div>
    </a>
  <?php endforeach; wp_reset_postdata();?>
</aside>