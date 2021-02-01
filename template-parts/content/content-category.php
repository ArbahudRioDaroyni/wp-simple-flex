<?php
/**
 * The template for displaying the index
 *
 * Displays all of the head element and everything up the "category" div.
 *
 * @link https://jejakcyber.com
 *
 * @package flex-theme
 * @subpackage flex-theme-jejakcyber
 * @since flex-theme-jejakcyber 1.0
 */	

?>
<section style="padding-top:9vh;">
  <?php $posts_array = get_list_posts(1, get_query_var('category_name'));
    foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
      <div class="row category-headline">
        <div class="full-width-7 pl-0">
          <div class="ch-img" style="background:url('<?= get_first_image_in_post() ?>')"></div>
        </div>
        <div class="full-width-5 ch-description">
          <a href="<?= esc_url( get_category_link( get_cat_ID( get_the_category()[0]->name ) ) ) ?>" class="ch-name">
            <h4><?= get_the_category()[0]->name ?></h4>
          </a>
          <a href="<?= get_permalink() ?>" class="ch-content">
            <div class="ch-text">
              <h3><?= get_the_title() ?></h3>
              <p><?= the_excerpt() ?></p>
            </div>
            <span class="ch-cta flex flex-center">
              Read Article
              <svg class="ch-icon flex flex-center" role="presentation">
                <use xlink:href="#mi-arrow-forward">
                  <svg id="mi-arrow-forward">
                    <path d="M9 1.5C4.8 1.5 1.5 4.8 1.5 9s3.3 7.5 7.5 7.5 7.5-3.3 7.5-7.5S13.2 1.5 9 1.5zm0 13l-1-1 3.8-3.8H3.5V8.3h8.4L8.1 4.5l.9-1L14.5 9 9 14.5z"></path>
                  </svg>
                </use>
              </svg>
            </span>
          </a>
        </div>
      </div>
  <?php endforeach; wp_reset_postdata();?>
</section>

<section class="section">
  <div class="row">
    <?php $posts_array = get_list_posts(3, get_query_var('category_name'), null, 1);
      foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
        <div class="full-width-4 category-block">
          <a href="<?= esc_url( get_category_link( get_cat_ID( get_the_category()[0]->name ) ) ) ?>" class="cb-name">
            <h4><?= get_the_category()[0]->name ?></h4>
          </a>
          <a href="<?= get_permalink() ?>" class="cb-content">
            <h3><?= get_the_title() ?></h3>
            <figure class="img">
              <?php if (isset($_GET['amp'])) { ?>
                <amp-img src="<?= get_first_image_in_post() ?>" height='150' width='300' layout='responsive' alt="<?= get_the_title() ?>"></amp-img>
              <?php } else { ?>
                <img src="<?= get_default_image() ?>" data-src="<?= get_first_image_in_post() ?>" data-srcset="<?= get_first_image_in_post() ?> 1x, <?= get_first_image_in_post() ?> 2x" class="lazy" alt="<?= get_the_title() ?>" />
              <?php } ?>
            </figure>
          </a>
        </div>
    <?php endforeach; wp_reset_postdata();?>
  </div>
</section>

<section class="section">
  <div class="category-story">
    <h2>Semua di <?= get_query_var('category_name')?></h2>
    <?php $posts_array = get_list_posts(3, get_query_var('category_name'));
      foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
        <a href="<?= get_permalink() ?>" class="row">
          <div class="full-width-10 pl-0 flex flex-center">
            <div class="cs-content">
              <h4><?php the_time('d F'); ?> / <?= get_the_tags()[0]->name ?></h4>
              <h3><?= get_the_title() ?></h3>
            </div>
          </div>
          <div class="full-width-2">
            <div class="cs-img">
              <figure class="img">
                <?php if (isset($_GET['amp'])) { ?>
                  <amp-img src="<?= get_first_image_in_post() ?>" height='150' width='300' layout='responsive' alt="<?= get_the_title() ?>"></amp-img>
                <?php } else { ?>
                  <img src="<?= get_default_image() ?>" data-src="<?= get_first_image_in_post() ?>" data-srcset="<?= get_first_image_in_post() ?> 1x, <?= get_first_image_in_post() ?> 2x" class="lazy img-full" alt="<?= get_the_title() ?>" />
                <?php } ?>
              </figure>
            </div>
          </div>
        </a>
    <?php endforeach; wp_reset_postdata();?>
    <a href="" class="btn">TAMPILAN LEBIH BANYAK</a>
  </div>
</section>