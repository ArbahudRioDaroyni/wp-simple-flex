<?php
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

function amp_filter($content){
	$patterns = []; $patterns_non_amp = []; $replacements = []; $replacements_non_amp = [];

	$patterns = [
		'/<img loading="lazy" ([^>]+)?>/',
		'/<script data-name="gist" data-id="(.*?)" data-file="(.*?)" ([^>]+)?><\/script>/',
		'/<iframe ([^>]+)? allow="([^>]+)?>(.*?)<\/iframe>/'
	];
	$replacements = [
		'<amp-img $1 layout="responsive"></amp-img>',
		'<amp-gist data-gistid="$1" data-file="$2" layout="fixed-height" height="185"></amp-gist>',
		'<amp-iframe $1 sandbox="allow-scripts allow-same-origin" layout="responsive"></amp-iframe>'
	];

	$patterns_non_amp = [ '/<img src="(.*?)" srcset="(.*?)" ([^>]+)?>/' ];
	$replacements_non_amp = [ '<img src="'.get_default_image().'" alt="'.get_the_title().'" class="lazy image" data-id="" data-src="$1" data-srcset="$2" $3>' ];
	
	if (isset($_GET['amp'])) {
		return preg_replace($patterns, $replacements, $content);
	} else {
		return preg_replace($patterns_non_amp, $replacements_non_amp, $content);
	}
}
add_filter('the_content', 'amp_filter');

function wp_head_custom_amp(){
	global $post, $posts;
	// start code
	if (strpos($post->post_content, 'data-name="gist"') !== false) {
		echo '<script async custom-element="amp-gist" src="https://cdn.ampproject.org/v0/amp-gist-0.1.js"></script>';
	} elseif (strpos($post->post_content, 'iframe') !== false) {
		echo '<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>';
	}
	
	// end code
}
add_action('wp_head', 'wp_head_custom_amp');