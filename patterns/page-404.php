<?php

/**
 * Title: Page 404
 * Slug: page-404
 * Description: Section for page 404.
 * Categories: featured
 * Keywords: section, animated, animation, 404
 * Inserter: true
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|medium","left":"0"}}},"textColor":"dark","fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-center has-dark-color has-text-color has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--medium);margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo __( 'Page Not Found', 'olena' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"dark","fontSize":"xx-small"} -->
<p class="has-text-align-center has-dark-color has-text-color has-xx-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo __( 'Unfortunately, the page you are looking for no longer exists, or has been moved. Please try searching for your content below.', 'olena' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:search {"showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","style":{"border":{"width":"1px"}},"borderColor":"main-dark","fontSize":"xx-small"} /--></div>
<!-- /wp:group -->

<?php if(olena_is_olena_blocks_set_activated()) : ?>

<!-- wp:olena/floating-box -->
<div class="wp-block-olena-floating-box" style="left:0%;top:0%" data-orientation="1" data-position-left="0" data-position-top="0" data-position-right="0" data-position-bottom="0"><!-- wp:olena/responsive-box {"unique_class":"mx-responsive-box-KoaLfgj2sl8K"} -->
<div data-breakpoint="desktop-tablets" class="mx-responsive-box mx-responsive-box-KoaLfgj2sl8K"><div class="wp-block-olena-responsive-box"><style>@media (max-width: 767.5px) {
		.mx-responsive-box.mx-responsive-box-KoaLfgj2sl8K {
			display: none !important;
		}
		.editor-styles-wrapper .mx-responsive-box.mx-responsive-box-KoaLfgj2sl8K {
			display: block !important;
			opacity: 0.5;
		}
	}						
</style><!-- wp:image {"id":50,"width":391,"height":391,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/animations/bubble_5.svg" alt="" class="wp-image-50" width="391" height="391"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:olena/responsive-box --></div>
<!-- /wp:olena/floating-box --></div>

<?php endif; ?>

<!-- /wp:group -->
