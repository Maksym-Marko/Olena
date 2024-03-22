<?php
/**
 * Title: Archive Product Page
 * Slug: olena/woocommerce-archive-product
 * Inserter: no
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"className":"is-style-animation-wrapper","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group is-style-animation-wrapper" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:olena/floating-box -->
<div class="wp-block-olena-floating-box" style="right:0%;bottom:0%" data-orientation="3" data-position-left="0" data-position-top="0" data-position-right="0" data-position-bottom="0"><!-- wp:olena/responsive-box {"unique_class":"mx-responsive-box-iHdmygUoKG6g"} -->
<div data-breakpoint="all" class="mx-responsive-box mx-responsive-box-iHdmygUoKG6g"><div class="wp-block-olena-responsive-box"><style></style><!-- wp:image {"id":61,"width":"610px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/animations/bubble_2.svg" alt="" class="wp-image-61" style="width:610px;height:auto"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:olena/responsive-box --></div>
<!-- /wp:olena/floating-box -->

<!-- wp:group {"className":"alignwide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/breadcrumbs {"fontSize":"x-small","textColor":"main-dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|main-dark"},":hover":{"color":{"text":"var:preset|color|main"}}}}}} /-->

<!-- wp:woocommerce/catalog-sorting {"fontSize":"xx-small","style":{"layout":{"selfStretch":"fixed","flexSize":"360px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:term-description {"align":"wide"} /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"typography":{"textDecoration":"none"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"typography":{"lineHeight":"1.5"},"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"layout":{"type":"constrained"},"fontSize":"xx-small"} -->
<div class="wp-block-group has-text-color has-link-color has-xx-small-font-size" style="color:#ffffff;line-height:1.5"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"height":"385px"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"dimensions":{"minHeight":"10rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:10rem"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"1rem"}}},"fontSize":"xx-small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"xx-small"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"backgroundColor":"main-dark","textColor":"light","fontSize":"xx-small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|mini","bottom":"var:preset|spacing|mini","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"typography":{"fontSize":"1rem"}},"textColor":"main"} -->
<!-- wp:query-pagination-previous {"label":"\u003c Prev","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{"fontSize":"1rem","textDecoration":"none"}},"className":"is-style-rounded-numbers"} /-->

<!-- wp:query-pagination-next {"label":"Next \u003e","style":{"typography":{"textDecoration":"none"}}} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>
<?php printf( esc_html__( '%s', 'olena' ), __( 'No products were found matching your selection.', 'olena' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->