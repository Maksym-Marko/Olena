<?php
/**
 * Title: Single Product
 * Slug: olena/post-single-product
 * Description: 
 * Categories: posts
 * Keywords: posts, grid
 * Block Types: core/query
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"layout":{"inherit":true,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-large)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"15px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:15px"><!-- wp:woocommerce/breadcrumbs {"fontSize":"x-small","align":"","textColor":"main-dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|main-dark"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"512px","style":{"typography":{"lineHeight":"1.5","textTransform":"uppercase"},"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}}},"fontSize":"xx-small"} -->
<div class="wp-block-column has-text-color has-link-color has-xx-small-font-size" style="color:#ffffff;line-height:1.5;text-transform:uppercase;flex-basis:512px"><!-- wp:woocommerce/product-image-gallery /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|mini"}}} -->
<div class="wp-block-column"><!-- wp:post-title {"level":1,"style":{"color":{"text":"#282828"},"elements":{"link":{"color":{"text":"#282828"}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:group {"style":{"typography":{"fontSize":"13px"},"color":{"text":"#282828"},"elements":{"link":{"color":{"text":"#282828"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#282828;font-size:13px"><!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"fontSize":"xxx-small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1.1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="font-size:1.1rem;font-style:normal;font-weight:700"><!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"xx-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#686868"},"elements":{"link":{"color":{"text":"#686868"}}}},"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

<!-- wp:group {"style":{"elements":{"button":{"color":{"text":"var:preset|color|light","background":"var:preset|color|main-dark"}},"link":{"color":{"text":"var:preset|color|main"},":hover":{"color":{"text":"var:preset|color|main-dark"}}}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"dark","layout":{"type":"constrained"},"fontSize":"xx-small"} -->
<div class="wp-block-group has-dark-color has-text-color has-link-color has-xx-small-font-size" style="padding-top:0;padding-bottom:0"><!-- wp:woocommerce/add-to-cart-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"color":{"text":"#686868"},"elements":{"link":{"color":{"text":"#686868"},":hover":{"color":{"text":"#000000"}}},"h2":{"color":{"text":"#282828"}}},"typography":{"fontSize":"1rem","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-text-color has-link-color" style="color:#686868;margin-top:4rem;margin-bottom:4rem;font-size:1rem;font-style:normal;font-weight:400"><!-- wp:woocommerce/product-details {"align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-meta {"align":"wide"} -->
<div class="wp-block-woocommerce-product-meta alignwide"><!-- wp:group {"style":{"typography":{"fontSize":"1rem"},"color":{"text":"#848485"},"elements":{"link":{"color":{"text":"#282828"}}},"border":{"top":{"color":"#0000001a","width":"1px"},"bottom":{"color":"#0000001a","width":"1px"}},"spacing":{"padding":{"top":"15px","bottom":"15px"},"margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-text-color has-link-color" style="border-top-color:#0000001a;border-top-width:1px;border-bottom-color:#0000001a;border-bottom-width:1px;color:#848485;margin-top:30px;padding-top:15px;padding-bottom:15px;font-size:1rem"><!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true,"style":{"color":{"text":"#282828"},"elements":{"link":{"color":{"text":"#282828"}}}}} /-->

<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"4rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:4rem;margin-bottom:6rem"><!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
<div class="wp-block-query"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|medium"}}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--medium)">
							Related products			</h2>
<!-- /wp:heading -->

<!-- wp:post-template {"style":{"typography":{"fontSize":"1rem"},"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":5},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}},"typography":{"fontSize":"10px","lineHeight":"1.5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#ffffff;font-size:10px;line-height:1.5"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"height":"192px"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|mini"}},"elements":{"link":{"color":{"text":"var:preset|color|main-dark"}}}},"textColor":"main-dark","fontSize":"x-small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"xx-small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|mini"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"xx-small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|mini"},"padding":{"top":"var:preset|spacing|mini","bottom":"var:preset|spacing|mini","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:woocommerce/related-products --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->