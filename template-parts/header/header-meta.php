<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?= $ampscript = (isset($_GET['amp'])) ? '<script async src="https://cdn.ampproject.org/v0.js"></script>' : '' ?>
<?= $ampform = (isset($_GET['amp'])) ? '<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>' : '' ?>
<?= $ampiframe = (isset($_GET['amp'])) ? '<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>' : '' ?>
<?= $ads = (isset($_GET['amp'])) ? '<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>' : '<script data-ad-client="ca-pub-5419652163962979" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>' ?>

<meta name="google-site-verification" content="1GS5b8XueaIk5rOTEhD8hwGXIfoZfAtK2KTCJlkJNDY" />

<?php if (is_home() || is_front_page()){ ?>
<meta name="description" content="<?php bloginfo( 'url' ); ?>, <?php bloginfo( 'description' ); ?> tentang website & mobile, SEO, review, desain grafis, dan UI UX." />
<title><?php bloginfo( 'name' ); ?> : <?php bloginfo( 'description' ); ?></title>
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> : <?php bloginfo( 'description' ); ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> : <?php bloginfo( 'description' ); ?>" />
<meta property="og:description" content="<?php bloginfo( 'url' ); ?>, <?php bloginfo( 'description' ); ?> tentang website & mobile, SEO, review, desain grafis, dan UI UX." />
<meta name="twitter:description" content="<?php bloginfo( 'url' ); ?>, <?php bloginfo( 'description' ); ?> tentang website & mobile, SEO, review, desain grafis, dan UI UX." />

<?php } elseif (is_single() || is_page()) { ?>
<meta name="description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php single_post_title(); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<title><?php bloginfo( 'name' ); ?> : <?php single_post_title(); ?></title>
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> : <?= single_post_title() ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> : <?= single_post_title() ?>" />
<meta property="og:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php single_post_title(); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<meta name="twitter:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php single_post_title(); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />

<?php } elseif (is_year() || is_day() || is_month()) { ?>
<meta name="description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> pada <?php wp_title('', true, 'right'); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<title><?php bloginfo( 'name' ); ?> : <?php single_post_title(); ?></title>
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> : <?= single_post_title() ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> : <?= single_post_title() ?>" />
<meta property="og:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> pada <?php wp_title('', true, 'right'); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<meta name="twitter:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> pada <?php wp_title('', true, 'right'); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />

<?php } elseif (is_tag()) { ?>
<meta name="description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php wp_title('', true, 'right'); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<title><?php bloginfo( 'name' ); ?> : <?php single_post_title(); ?></title>
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> : <?= single_post_title() ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> : <?= single_post_title() ?>" />
<meta property="og:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php wp_title('', true, 'right'); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<meta name="twitter:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php wp_title('', true, 'right'); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />

<?php } elseif (is_category()) { ?>
<meta name="description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php single_cat_title(); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<title><?php bloginfo( 'name' ); ?> : <?= get_the_category()[0]->name ?></title>
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> : <?= get_the_category()[0]->name ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> : <?= get_the_category()[0]->name ?>" />
<meta property="og:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php single_cat_title(); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<meta name="twitter:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php single_cat_title(); ?> - <?= wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<?php } elseif (is_search()) { ?>
<meta name="description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php the_search_query(); ?>" />
<title><?php bloginfo( 'name' ); ?> : <?php single_post_title(); ?></title>
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> : <?php single_post_title(); ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> : <?php single_post_title(); ?>" />
<meta property="og:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php the_search_query(); ?>" />
<meta name="twitter:description" content="Temukan infomasi lengkap di <?php bloginfo( 'name' ); ?> tentang <?php the_search_query(); ?>" />
<?php } ?>
<meta name='author' content='<?php bloginfo( 'name' ); ?>' />
<meta name="keywords" content="It Support, Developer Website, Developer Mobile, SEO, Jasa SEO, UI UX, Review Google, Rating Google">
<link rel="alternate" href="<?= get_site_url() ?>/?lang=in" hreflang="in"/>
<link rel="alternate" href="<?= get_site_url() ?>/" hreflang="x-default"/>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?= get_site_url() ?>/xmlrpc.php" />
<meta property="og:locale" content="<?= get_locale() ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?= get_permalink() ?>" />
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
<meta name="twitter:card" content="summary_large_image" />

<!-- start wp_head -->
<?php wp_head(); ?>
<!-- end wp_head -->