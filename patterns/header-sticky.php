<?php
/**
 * Title: Header Sticky
 * Slug: olena/header-sticky
 * Description: Header with site logo and navigation
 * Categories: header
 * Keywords: header, nav, site logo
 * Block Types: core/template-part/header
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|mini","bottom":"var:preset|spacing|mini","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"position":{"type":"sticky","top":"0px"}},"textColor":"base","layout":{"inherit":true,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0;padding-top:var(--wp--preset--spacing--mini);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--mini);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"dark","icon":"menu","overlayBackgroundColor":"main-light","overlayTextColor":"base","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"x-small"} /-->

<!-- wp:olena/responsive-box {"unique_class":"mx-responsive-box-1sPi96TwCANV"} -->
<div data-breakpoint="desktop-tablets" class="mx-responsive-box mx-responsive-box-1sPi96TwCANV"><div class="wp-block-olena-responsive-box"><style>@media (max-width: 767.5px) {
.mx-responsive-box.mx-responsive-box-1sPi96TwCANV {
display: none !important;
}
.editor-styles-wrapper .mx-responsive-box.mx-responsive-box-1sPi96TwCANV {
display: block !important;
opacity: 0.5;
}
}
</style><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"light"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-light-color has-text-color wp-element-button" href="<?php echo esc_url( 'https://olena-theme.com.ua/' ); ?>"><?php echo esc_html__( 'Download', 'olena' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:olena/responsive-box --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
