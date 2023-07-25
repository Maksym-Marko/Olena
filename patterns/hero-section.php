<?php
/**
 * Title: Hero Section
 * Slug: hero-section
 * Description: Hero Section for Home page
 * Categories: header
 * Keywords: hero banner, hero section
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|huge","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="hero" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--huge);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|xxxx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"0px"}},"textColor":"base","layout":{"inherit":true,"type":"constrained","contentSize":"790px"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xxxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":1.2}},"textColor":"dark","fontSize":"xx-large","fontFamily":"roboto-light"} -->
<h1 class="wp-block-heading has-text-align-center has-dark-color has-text-color has-roboto-light-font-family has-xx-large-font-size" style="line-height:1.2"><strong><?php echo esc_html__( 'Use OLENA WordPress Theme to achieve your&nbsp;goal', 'olena' ); ?></strong></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"554px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"dark","fontSize":"x-small"} -->
<p class="has-text-align-center has-dark-color has-text-color has-x-small-font-size"><?php printf( esc_html__( '%s', 'olena' ), __( 'Gutenberg Full Site Editing (FSE) requires no code to create your first website. Use <strong>Olena</strong> <strong>Theme</strong> to build a professional online presence', 'olena' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|mini","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|mini","left":"var:preset|spacing|medium"}}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://wordpress.org/themes/olena/' ); ?>" style="padding-top:var(--wp--preset--spacing--mini);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--mini);padding-left:var(--wp--preset--spacing--medium)" target="_blank" rel="noreferrer noopener"><?php echo __( 'Download Olena Theme', 'olena' ); ?> <img class="wp-image-17" style="width: 20px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/download.svg" alt=""></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|mini","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|mini","left":"var:preset|spacing|medium"}}},"className":"is-style-bright-button is-style-bright","fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size is-style-bright-button is-style-bright has-x-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'https://olena-theme.in.ua' ); ?>" style="padding-top:var(--wp--preset--spacing--mini);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--mini);padding-left:var(--wp--preset--spacing--medium)" target="_blank" rel="noreferrer noopener"><?php echo __( 'Live Demo', 'olena' ); ?> <img class="wp-image-19" style="width: 20px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/demo.svg" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0"><!-- wp:image {"id":32,"width":25,"height":28,"sizeSlug":"full","linkDestination":"custom","className":"sb-move-to-section"} -->
<figure class="wp-block-image size-full is-resized sb-move-to-section"><a href="#first-scroll-position"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/to-down-black.svg" alt="" class="wp-image-32" width="25" height="28"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:olena/responsive-spacer {"unique_class":"mx-spacer-6PPVuUTzbqWV","media_default":"1"} -->
<div id="first-scroll-position" class="wp-block-olena-responsive-spacer"><div class="mx-responsive-block-spacer mx-spacer-6PPVuUTzbqWV"><style>.mx-spacer-6PPVuUTzbqWV {
height: 1px;
}</style></div></div>
<!-- /wp:olena/responsive-spacer --></div>
<!-- /wp:group -->
