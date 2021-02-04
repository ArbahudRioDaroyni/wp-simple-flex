<?php 
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version); //gets version written in your style.css

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
} 
// add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'custom_excerpt_more', 21 );

function get_author_role(){
	global $authordata;
	$author_roles = $authordata->roles;
	$author_role = array_shift($author_roles);
	return $author_role;
}

function get_list_posts($total, $category = null, $tag = NULL, $offset = 0){
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = [
		'post_type'        => 'post',
		'posts_per_page'   => $total,
		'category_name'    => $category,
		'tag'							 => $tag,
		'offset'           => $offset,
		'paged'		         => $paged,
		'order'            => 'DESC',
		'orderby'          => 'date',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	];
	return get_posts( $args );
}

function get_list_popular_posts($total, $offset = 0){
	$args = [
		'post_type'        => 'post',
		'posts_per_page'   => $total,
		'offset'           => $offset,
		'order'            => 'DESC',
		'orderby'          => 'meta_value_num',
		'meta_key'				 => 'post_views_count',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	];
	return get_posts( $args );
}

function get_default_image()
{
	return get_template_directory_uri().'/img/default.png';
}

function get_first_image_in_post() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	
	if(empty($first_img)){
		$first_img = get_default_image();
	}
	return $first_img;
}

function minifier($code) { 
	$search = array( 
				
			// Remove whitespaces after tags 
			'/\>[^\S ]+/s', 
				
			// Remove whitespaces before tags 
			'/[^\S ]+\</s', 
				
			// Remove multiple whitespace sequences 
			'/(\s)+/s', 
				
			// Removes comments 
			'/<!--(.|\s)*?-->/'
	); 
	$replace = array('>', '<', '\\1'); 
	$code = preg_replace($search, $replace, $code); 
	return $code; 
}

// function content_image_sizes_attr( $sizes, $size ) {
// 	$width = $size[0].'px';

// 	$sizes = "(max-width: $width) 100%";

// 	return $sizes;
// }
add_filter( 'wp_calculate_image_sizes', 'content_image_sizes_attr', 10, 2 );


// function get_id_attachment_by_url($url){
// 	global $wpdb;
// 	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $url )); 
// 	return $attachment[0];
// }

// function get_img_responsive($url){
// 	$img = (wp_is_mobile()) ? 
// 	image_downsize( get_id_attachment_by_url( $url ) )[0] :
// 	wp_get_attachment_image_src( get_id_attachment_by_url( $url ), 'medium_large' )[0];
	
// 	return $image = ($img == NULL) ? get_first_image_in_post() : $img;
// }

require_once( get_template_directory() . '/inc/register-view-count-report.php' );

require_once( get_template_directory() . '/inc/wp-amp.php' );

require_once( get_template_directory() . '/inc/structured-data.php' );