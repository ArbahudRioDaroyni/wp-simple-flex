<?php 
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version); //gets version written in your style.css

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// for redirect google amp page
define( 'AMP_QUERY_VAR', apply_filters( 'amp_query_var', 'amp' ) );
add_rewrite_endpoint( AMP_QUERY_VAR, EP_PERMALINK | EP_PAGES );
function prefix_url_rewrite() {
	if( get_query_var( AMP_QUERY_VAR, false ) !== false ) {
		if ( is_page() ) {
      add_filter( 'template_include', function() {
        return get_template_directory() . '/index-amp.php';
      });
		}
		if ( is_single() ) {
      add_filter( 'template_include', function() {
        return get_template_directory() . '/single-amp.php';
      });
		}
	}
}
add_action( 'template_redirect', 'prefix_url_rewrite' );
// /.for redirect google amp page

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'custom_excerpt_more', 21 );

function set_lazy_load_image($content){
	$content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
	$document = new DOMDocument();
	libxml_use_internal_errors(true);
	$document->loadHTML(utf8_decode($content));

	$imgs = $document->getElementsByTagName('img');
	foreach ($imgs as $img) {
		if (isset($_GET['amp'])) {
			$amp = $document->createElement("amp-img");
			$amp->setAttribute('data-id',$img->getAttribute('data-id'));
			$amp->setAttribute('alt',$img->getAttribute( 'alt' ));
			$amp->setAttribute('src',$img->getAttribute( 'src' ));
			$amp->setAttribute('height',250);
			$amp->setAttribute('width',400);
      $amp->setAttribute('layout', 'responsive');
      $amp->setAttribute('srcset',$img->getAttribute( 'srcset' ));
      $img->parentNode->replaceChild($amp, $img);
		} else {
			$img->setAttribute('data-id',$img->getAttribute('data-id'));
			$img->setAttribute('class','lazy');
			$img->setAttribute('data-src', $img->getAttribute('src'));
			$img->setAttribute('data-srcset', $img->getAttribute('srcset'));
			$img->setAttribute('src', get_default_image());
			$img->removeAttribute('srcset');
		}
	}
	$html = $document->saveHTML();
	return $html;
}
add_filter('the_content', 'set_lazy_load_image');

// get post view count
function get_post_view() {
	$count = get_post_meta( get_the_ID(), 'post_views_count', true );
	return "views : $count";
}
function set_post_view() {
	$key = 'post_views_count';
	$post_id = get_the_ID();
	$count = (int) get_post_meta( $post_id, $key, true );
	$count++;
	update_post_meta( $post_id, $key, $count );
}
function posts_column_views( $columns ) {
	$columns['post_views'] = 'Views';
	return $columns;
}
function posts_custom_column_views( $column ) {
	if ( $column === 'post_views') {
			echo get_post_view();
	}
}
add_filter( 'manage_posts_columns', 'posts_column_views' );
add_action( 'manage_posts_custom_column', 'posts_custom_column_views' );
// /.get post view count

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

function filter_amp($content){
	if (isset($_GET['amp'])) {
		return preg_replace('/<iframe([^>]+)?>(.*?)<\/iframe>/', '<iframe$1 class="inro">$2</iframe>', $content);
	} else {
		return $content;
	}
}
add_filter('the_content', 'filter_amp');

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