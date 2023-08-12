<?php
/**
 * Title: Latest News Section
 * Slug: latest-news-section
 * Description: Section with the latest 3 news for home page
 * Categories: posts
 * Keywords: posts, news
 * Inserter: true
 */

?>

<?php if(!olena_is_olena_blocks_set_activated()) : ?>

    <?php olena_display_olena_blocks_set_pattern('Latest News Section'); ?>

<?php else : ?>

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-animation-wrapper","layout":{"type":"constrained"}} -->
<section id="latest-news" class="wp-block-group is-style-animation-wrapper" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:olena/floating-box -->
<div class="wp-block-olena-floating-box" style="left:5%;top:12%" data-orientation="1" data-position-left="5" data-position-top="12" data-position-right="-13" data-position-bottom="0"><!-- wp:olena/responsive-box {"unique_class":"mx-responsive-box-t8FQXxoyJDMu"} -->
<div data-breakpoint="desktop" class="mx-responsive-box mx-responsive-box-t8FQXxoyJDMu"><div class="wp-block-olena-responsive-box"><style>@media (max-width: 991.5px) {
.mx-responsive-box.mx-responsive-box-t8FQXxoyJDMu {
display: none !important;
}
.editor-styles-wrapper .mx-responsive-box.mx-responsive-box-t8FQXxoyJDMu {
display: block !important;
opacity: 0.5;
}
}						
</style><!-- wp:image {"id":257,"width":553,"height":553,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/animations/bubble_5.svg" alt="" class="wp-image-257" width="553" height="553"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:olena/responsive-box --></div>
<!-- /wp:olena/floating-box -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"var:preset|spacing|medium","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--medium);padding-left:0"><!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="zoomIn" data-extras=""><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":1.1}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.1"><strong>Latest News</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Check our latest news about Olena theme</p>
<!-- /wp:paragraph --></div>
<!-- /wp:olena/animated-box --></div>
<!-- /wp:group -->

<!-- wp:olena/animated-box -->
<div class="wp-block-olena-animated-box" data-animation-type="zoomIn" data-extras=""><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"0","right":"0","left":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-template {"align":"wide","textColor":"dark","className":"is-style-grid-modern"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"className":"is-style-animation-wrapper"} -->
<div class="wp-block-group is-style-animation-wrapper" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"","overlayColor":"main-dark","dimRatio":50,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"0px"}},"className":"is-style-animation-pointer","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-animation-pointer" style="border-radius:0px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"className":"is-style-default","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"8px","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"xx-small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":1.3},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:olena/animated-box --></section>
<!-- /wp:group -->

<?php endif; ?>
