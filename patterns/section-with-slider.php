<?php

/**
 * Title: Section With a Slider
 * Slug: olena/section-with-slider
 * Description: Section with a subtitle, title, description and slider.
 * Categories: featured
 * Keywords: section, slider
 * Inserter: true
 */

?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|mini","left":"var:preset|spacing|mini"}}},"backgroundColor":"main-light","layout":{"type":"constrained"}} -->
<section id="section-with-slider" class="wp-block-group has-main-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--mini);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--mini)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="fadeInLeft" data-extras=""><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"textColor":"main"} -->
<h4 class="wp-block-heading has-main-color has-text-color" style="font-style:normal;font-weight:100"><?php echo __( 'Dynamic Animations', 'olena' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.2}},"fontSize":"medium","fontFamily":"roboto-light"} -->
<h3 class="wp-block-heading has-roboto-light-font-family has-medium-font-size" style="line-height:1.2"><?php echo __( 'Engage Your Visitors', 'olena' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.3}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1.3"><?php echo __( 'Enhance your website with captivating animations that bring images, texts, and sections to life!', 'olena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:olena/animated-box -->

<!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="fadeInLeft" data-extras=""><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-main-outline"} -->
<div class="wp-block-button is-style-main-outline"><a class="wp-block-button__link wp-element-button" href="#animated-horizontal"><?php echo __( 'View Olena animations', 'olena' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:olena/animated-box -->

<!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="fadeInLeft" data-extras=""><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"dimensions":{"minHeight":"140px"}},"backgroundColor":"light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-light-background-color has-background" style="min-height:140px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph -->
<p><?php echo __( 'Easily Add Animations via Admin Panel', 'olena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"dimensions":{"minHeight":"140px"}},"backgroundColor":"light","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
<div class="wp-block-group has-light-background-color has-background" style="min-height:140px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph -->
<p><?php echo __( 'Save Costs Without Hiring a Programmer', 'olena' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:olena/animated-box --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="zoomIn" data-extras=""><!-- wp:olena/content-slider -->
<div class="wp-block-olena-content-slider" data-autoplay="1" data-autoplay-speed="5" data-nav="0" data-dots="0" data-loop="1"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":84,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sections/section-with-slider/image_1.png" alt="" class="wp-image-84"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":85,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sections/section-with-slider/image_2.png" alt="" class="wp-image-85"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":86,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sections/section-with-slider/image_3.png" alt="" class="wp-image-86"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:olena/content-slider --></div>
<!-- /wp:olena/animated-box --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
