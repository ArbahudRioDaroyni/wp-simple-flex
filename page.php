<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-simple-flex
 * @package WP Simple Flex
 * @subpackage WP Simple Flex
 * @since 1.0.0
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
      the_post();
      
			// Include the single post content template.
			get_template_part( 'template-parts/content/content', 'page' );

			// End of the loop.
		endwhile;
		?>
	</main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>