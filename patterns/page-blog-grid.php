<?php
/**
 * Title: Blog Grid
 * Slug: olena/blog-grid
 * Description: Add a Blog Grid
 * Categories: posts
 * Keywords: template, blog
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-animation-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-animation-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:olena/floating-box -->
<div class="wp-block-olena-floating-box" style="right:3%;bottom:0%" data-orientation="3" data-position-left="0" data-position-top="0" data-position-right="3" data-position-bottom="0"><!-- wp:olena/responsive-box {"unique_class":"mx-responsive-box-4svZh1Fc2yjh"} -->
<div data-breakpoint="desktop" class="mx-responsive-box mx-responsive-box-4svZh1Fc2yjh"><div class="wp-block-olena-responsive-box"><style>@media (max-width: 991.5px) {
	.mx-responsive-box.mx-responsive-box-4svZh1Fc2yjh {
		display: none !important;
	}
	.editor-styles-wrapper .mx-responsive-box.mx-responsive-box-4svZh1Fc2yjh {
		display: block !important;
		opacity: 0.5;
	}
}
</style><!-- wp:image {"id":257,"width":"595px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/animations/bubble_5.svg" alt="" class="wp-image-257" style="object-fit:cover;width:595px;height:auto"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:olena/responsive-box --></div>
<!-- /wp:olena/floating-box -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"var:preset|spacing|medium","bottom":"0","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--medium);padding-bottom:0;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":1.4}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" style="line-height:1.4"><?php printf( esc_html__( '%s', 'olena' ), __( 'Latest News', 'olena' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":1.4}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.4"><?php printf( esc_html__( '%s', 'olena' ), __( 'Check our latest news about Olena theme', 'olena' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-template {"align":"wide","textColor":"dark","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"5px"}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-featured-image {"isLink":true,"height":"230px","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"typography":{"textDecoration":"none"}},"textColor":"dark","className":"is-style-default","fontSize":"xx-small"} /-->

<!-- wp:post-date {"textColor":"dark","fontSize":"xx-small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":1.3}},"textColor":"main","fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":26,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","className":"is-style-excerpt-truncate-3","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"},"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","textColor":"dark","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->