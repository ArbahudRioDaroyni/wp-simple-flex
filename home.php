<?php
/**
 * The template for displaying the home
 *
 * Displays all of the element and everything up until the "content-area" div.
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-simple-flex
 * @package WP Simple Flex
 * @subpackage WP Simple Flex
 * @since 1.0.0
 */

get_header();
?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

    <!-- featured-area -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="full-width-9">
            <div class="featured">
              <h2 class="f-h">Headline</h2>
              <hr class="h-line">
              <div class="row">
                <div class="full-width-5">
                  <?php $posts_array = get_list_popular_posts(1);
                    foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                      <a href="<?= get_the_permalink() ?>" class="f-pst">
                        <figure>
                          <?php if (isset($_GET['amp'])) { ?>
                            <amp-img src="<?= get_first_image_in_post() ?>" height='150' width='300' layout='responsive' alt="<?= get_the_title() ?>" ></amp-img>
                          <?php }else{ ?>
                            <img src="<?= get_default_image() ?>" data-src="<?= get_first_image_in_post() ?>" data-srcset="<?= get_first_image_in_post() ?> 1x, <?= get_first_image_in_post() ?> 2x" class="lazy img-full" alt="<?= get_the_title() ?>" />
                          <?php } ?>
                        </figure>
                        <h3 class="f-pst-title"><?= get_the_title() ?></h3>
                        <p class="f-pst-content"><?= get_the_excerpt() ?></p>
                        <p class="f-pst-meta"><span class="f-pst-author"><?= get_the_author(); ?></span> in <span class="f-pst-category"><?= get_the_category()[0]->name ?></span></p>
                        <time class="f-pst-footer" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('D, d F Y'); ?></time>
                        <a class="btn btn-outline mt-1 mb-1" href="#">Tampilkan Selengkapnya</a>
                      </a>
                  <?php endforeach; wp_reset_postdata();?>
                </div>
                <div class="full-width-7">
                  <?php $posts_array = get_list_popular_posts(3, 1);
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
                </div>
              </div>
            </div>
          </div>
          <div class="full-width-3">
            <div class="tranding">
              <h2 class="trd-h">Cerita terbaru</h2>
              <hr class="h-line mb-1">
              <?php $posts_array = get_list_posts(4);
               $i=1;
                foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                  <a href="<?= get_the_permalink() ?>" class="trd-box flex-full-center">
                    <div class="trd-number"><span>0<?= $i ?></span></div>
                    <div class="trd-content">
                      <h3 class="trd-title"><?= get_the_title() ?></h3>
                      <p style="margin-bottom: 4px;"><span><?= get_the_author(); ?></span> in <span><?= get_the_category()[0]->name ?></span></p>
                      <time datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('D, d F Y'); ?></time>
                    </div>
                  </a>
              <?php $i++; endforeach; wp_reset_postdata();?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
		<!-- <section class="section-headline mobile section">
      <div class="headline container">
        <img src="https://jejakcyber.com/wp-content/uploads/2020/04/image.jpg" />
        <div class="headline-description flex columns nowrap">
          <p class="headline-category">Health</p>
          <h2 class="m-0"><a href="#">Helping public health officials combat COVID-19</a></h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae maxime provident similique aut suscipit expedita officiis quas ut itaque, quis quibusdam rem quo veritatis error excepturi. Cumque culpa numquam praesentium.</p>
          <span class="headline-cta">
            <a class="flex" href="#" id="headline-cta">
              Baca Artikel
              <svg class="headline-cta-icon" role="presentation" for='headline-cta'>
                <use xlink:href="#mi-arrow-forward">
                  <svg id="mi-arrow-forward">
                    <path d="M9 1.5C4.8 1.5 1.5 4.8 1.5 9s3.3 7.5 7.5 7.5 7.5-3.3 7.5-7.5S13.2 1.5 9 1.5zm0 13l-1-1 3.8-3.8H3.5V8.3h8.4L8.1 4.5l.9-1L14.5 9 9 14.5z"></path>
                  </svg>
                </use>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </section> -->

		<!-- <section class="section-news mobile">
      <h2 class="news-title">Berita Terbaru</h2>
      <div class="headline container">
        <div class="img-crop" style="height:12rem">
          <img class="img-is-cropped" src="https://jejakcyber.com/wp-content/uploads/2020/04/image.jpg" />
        </div>
        <div class="headline-description flex columns nowrap">
          <p class="headline-category">Health</p>
          <h3 class="m-0"><a href="#">Helping public health officials combat COVID-19</a></h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae maxime provident similique aut suscipit expedita officiis quas ut itaque.</p>
          <span class="headline-cta">
            <a class="flex" href="#" id="headline-cta">
              Baca Artikel
              <svg class="headline-cta-icon" role="presentation" for='headline-cta'>
                <use xlink:href="#mi-arrow-forward">
                  <svg id="mi-arrow-forward">
                    <path d="M9 1.5C4.8 1.5 1.5 4.8 1.5 9s3.3 7.5 7.5 7.5 7.5-3.3 7.5-7.5S13.2 1.5 9 1.5zm0 13l-1-1 3.8-3.8H3.5V8.3h8.4L8.1 4.5l.9-1L14.5 9 9 14.5z"></path>
                  </svg>
                </use>
              </svg>
            </a>
          </span>
        </div>
      </div>
      <div class="feed container nowrap">
        <div class="feed-img">
          <img src="https://jejakcyber.com/wp-content/uploads/2020/04/image.jpg" />
        </div>
        <div class="feed-content flex columns nowrap">
          <h4 class="m-0"><a href="#">Helping public health officials combat COVID-19</a></h4>
        </div>
      </div>
    </section> -->

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();