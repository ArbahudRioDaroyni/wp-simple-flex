<?php
/**
 * The template for displaying the index
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

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			// while ( have_posts() ) {
			// 	the_post();
			// 	get_template_part( 'template-parts/content/content' );
			// }

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();