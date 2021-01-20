<?php
/**
 * The template for displaying the index
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @link https://jejakcyber.com
 *
 * @package flex-theme
 * @subpackage flex-theme-jejakcyber
 * @since flex-theme-jejakcyber 1.0
 */	

?>
<?php // echo $b=(isset($_GET['amp']))?'':'<link rel="stylesheet" media="screen" type="text/css" href="'.get_bloginfo( 'url' ).'/wp-content/themes/jejakcyber/assets/css/single-article.css?ver=1.1.3"/>' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
	<div class="container p-0">

		<header class="entry-header p-set">
			<a href="<?= esc_url( get_category_link( get_cat_ID( get_the_category()[0]->name ) ) ) ?>" rel="category" class="a-category"><?= get_the_category()[0]->name ?></a>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
		</header>

		<figure class="hero-img">
			<?php if (isset($_GET['amp'])) { ?>
				<amp-img src="<?= get_first_image_in_post() ?>" height='150' width='300' layout='responsive' alt="<?= get_the_title() ?>"></amp-img>
			<?php } else { ?>
				<img src="<?= get_default_image() ?>" data-src="<?= get_first_image_in_post() ?>" data-srcset="<?= get_first_image_in_post() ?> 1x, <?= get_first_image_in_post() ?> 2x" class="lazy" alt="<?= get_the_title() ?>" />
			<?php } ?>
		</figure>

		<div class="row p-set">

			<div class="entry-meta description flex flex-columns-nowrap a-info full-width-2 pl-0">
				<span class="vcard">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a>
				</span> 
				<span class="author-role"><?= get_author_role() ?></span>
				<time class="entry-date updated a-publish" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('D, d F Y'); ?></time>
			</div>

			<div class="entry-content rich-text full-width-7">
				<?php the_content(); ?>
			</div>

			<?php get_sidebar() ?>

			<footer class="entry-footer flex a-footer">
				<?php foreach (get_the_tags() as $value) { ?>
					#<a href="<?= esc_url( get_tag_link( $value ) ) ?>" rel="tag" class="tag"><?= $value->name ?></a>
				<?php } ?>
			</footer><!-- .entry-footer -->

		</div>

	</div><!-- .entry-content -->

	<?php get_template_part( 'template-parts/section/section','related-article' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->
<?php set_post_view() ?>