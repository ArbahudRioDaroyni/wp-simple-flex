<?php // echo $b=(isset($_GET['amp']))?'':'<link rel="stylesheet" media="screen" type="text/css" href="'.get_bloginfo( 'url' ).'/wp-content/themes/jejakcyber/assets/css/card-overflow-article.css?ver=1.1.2"/>' ?>
<section class="news-article">
  <div>
    <h3 class="heading h2" style="text-align: center;">Artikel Terbaru</h3>
    <ul class="flex flex-nowrap carousel lsn">
      <?php $posts_array = get_list_posts(7);
      foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
      <li class="carousel-list">
        <a href="<?php the_permalink();?>" class="flex carousel-container">
          <div class="flex flex-columns carousel-card m-0">
            <div class="carousel-header">
              <div class="carousel-image">
                <figure class="m-0">
                  <?php if (isset($_GET['amp'])) { ?>
                    <amp-img src="<?= get_first_image_in_post() ?>" height='150' width='300' layout='responsive' alt="<?= get_the_title() ?>"></amp-img>
                  <?php }else{ ?>
                    <img src="<?= get_default_image() ?>" data-src="<?= get_first_image_in_post() ?>" data-srcset="<?= get_first_image_in_post() ?> 1x, <?= get_first_image_in_post() ?> 2x" class="lazy" alt="<?= get_the_title() ?>" />
                  <?php } ?>
                </figure>
              </div>
              <div class="carousel-content">
                <h5><?= get_the_category()[0]->name ?></h5>
                <h4 class="carousel-title"><?= the_title(); ?></h4>
              </div>
            </div>
            <div class="flex carousel-info">
              <time class="time" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('D, d F Y'); ?></time>
              <svg role="img" class="carousel-cta" data-target="arrow">
                <use xlink:href="#mi-arrow-forward-no-bg">
                  <svg id="mi-arrow-forward-no-bg" viewBox="0 0 32 32">
                    <polygon points="16,0 13.2,2.8 24.3,14 0,14 0,18 24.3,18 13.2,29.2 16,32 32,16"></polygon>
                  </svg>
                </use>
              </svg>
            </div>
          </div>
        </a>
      </li>
      <?php endforeach; wp_reset_postdata();?>
    </ul>
  </div>
</section>