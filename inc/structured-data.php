<?php
function wp_head_custom_structured_data(){
	// start code ?>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "NewsArticle",
		"name": "<?= get_the_title() ?>",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "<?= get_the_permalink() ?>"
		},
		"headline": "<?= get_the_title() ?>",
		"description":"<?php echo strip_tags( get_the_excerpt() ); ?>",
		"image": "<?= get_first_image_in_post() ?>",
		"datePublished": "<?php the_time('c'); ?>",
		"dateModified": "<?php the_time('c'); ?>",
		"articleSection": "<?= get_the_category()[0]->name ?>",
		"author": {
			"@type": "Person",
			"name": "Roy"
		},
		"publisher": {
			"@type": "Organization",
			"name": "<?= get_bloginfo('name') ?>",
			"logo": {
				"@type": "ImageObject",
				"url": "https://google.com/logo.jpg"
			}
		},
		"url":"<?php the_permalink(); ?>",
		"keywords":"<?= get_the_tags()[0]->name ?>"
	}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org/",
			"@type": "BreadcrumbList",
			"name": "BreadcrumbList",
			"itemListElement": [{
				"@type": "ListItem",
				"position": "1",
				"item": {
					"@id": "<?= esc_url( home_url( '/', 'https' ) ); ?>",
					"name": "Home",
					"image": "<?= esc_url( home_url( '/', 'https' ) ); ?>wp-content/uploads/2019/12/Randd-Soft.png"
				}
			}
			<?php if ( is_single() || is_page() || is_category() || is_year() || is_month() || is_day() || is_tag() || is_search() ){
				$categories = get_the_category();
				$category_name = esc_html( $categories[0]->name );
				$category_id = get_cat_ID( $category_name );
				$category_link = get_category_link( $category_id );
					if( is_single() ){
						if ( ! empty( $categories ) ) { ?>
						,{
							"@type": "ListItem",
							"position": "2",
							"item": { 
								"@id": "<?= $category_link; ?>",
								"name": "<?= $category_name; ?>"
							}
						}
						<?php $tags = get_the_tags();
						$tag_name = esc_html( $tags[0]->name );
						$tag_link = get_tag_link( $tags[0] );
						if( $tags ){ ?>
						,{
							"@type": "ListItem",
							"position": "3",
							"item": {
								"@id": "<?= $tag_link; ?>",
								"name": "<?= $tag_name; ?>"
							}
						}
						<?php } ?>
						,{
							"@type": "ListItem",
							"position": "<?= $j = ( $tags ) ? '4' : '3'; ?>",
							"item": {
								"@id": "<?php the_permalink(); ?>",
								"name": "<?php single_post_title(); ?>"
							}
						}
			<?php } // ! empty( $categories )
					}else{ ?>
						,{
							"@type": "ListItem", 
							"position": "2", 
							"item": {
								"@id": "<?php the_permalink(); ?>", 
								"name": "<?php if( is_category() ){ 
												single_cat_title();
										}elseif (is_page()) {
												single_post_title();
										}else{
												wp_title('', true, 'right'); 
										} ?>"
							}
						}
		<?php }
			} ?>
			]
		}
		</script>
	<?php // end code
}
add_action('wp_head', 'wp_head_custom_structured_data');