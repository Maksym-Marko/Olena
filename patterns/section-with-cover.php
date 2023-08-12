<?php

/**
 * Title: Section With Cover
 * Slug: section-with-cover
 * Description: Section with a subtitle, title, description and cover.
 * Categories: featured
 * Keywords: section, cover
 * Inserter: true
 */

?>

<?php if(!olena_is_olena_blocks_set_activated()) : ?>

    <?php olena_display_olena_blocks_set_pattern('Section With Cover'); ?>

<?php else : ?>

<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"main-light","layout":{"type":"constrained"}} -->
<section id="section-with-cover" class="wp-block-group has-main-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="fadeInLeft" data-extras=""><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"textColor":"main"} -->
<h4 class="wp-block-heading has-main-color has-text-color" style="font-style:normal;font-weight:100">Use animations</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.2}},"fontSize":"medium","fontFamily":"roboto-light"} -->
<h3 class="wp-block-heading has-roboto-light-font-family has-medium-font-size" style="line-height:1.2">Interactable website won’t leave your visitors indifferent</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.3}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1.3">Add animations to your website’s elements. Let images, texts and sections fly!</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:olena/animated-box -->

<!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="fadeInLeft" data-extras=""><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-main-outline"} -->
<div class="wp-block-button is-style-main-outline"><a class="wp-block-button__link wp-element-button" href="#flying-images">View Olena animations</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:olena/animated-box -->

<!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="fadeInLeft" data-extras=""><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"dimensions":{"minHeight":"140px"}},"backgroundColor":"light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-light-background-color has-background" style="min-height:140px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph -->
<p>Add animations via admin panel</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"dimensions":{"minHeight":"140px"}},"backgroundColor":"light","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
<div class="wp-block-group has-light-background-color has-background" style="min-height:140px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph -->
<p>Save lots of money hiring no programmer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:olena/animated-box -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="zoomIn" data-extras=""><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sections/section-with-cover/image_1.jpg","id":290,"dimRatio":0,"minHeight":654,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:654px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-290" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/sections/section-with-cover/image_1.jpg" data-object-fit="cover" />
<div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->
</div>
</div>
<!-- /wp:cover -->
</div>
<!-- /wp:olena/animated-box -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<?php endif; ?>
