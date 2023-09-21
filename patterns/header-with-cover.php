<?php
/**
 * Title: Header With Cover
 * Slug: olena/header-with-cover
 * Description: Header with site logo and navigation
 * Categories: header
 * Keywords: header, nav, site logo
 * Block Types: core/template-part/header
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cover.jpg","id":61,"dimRatio":0,"overlayColor":"black","focalPoint":{"x":0.5,"y":0.5},"minHeight":40,"minHeightUnit":"vw","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:40vw"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-61" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cover.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"color":{"background":"#ffffff00"},"typography":{"lineHeight":"1.3"}},"textColor":"light","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-light-color has-text-color has-background has-x-large-font-size" style="background-color:#ffffff00;line-height:1.3"><strong><?php echo __( 'Use WordPress modern technologies to achieve your goal', 'olena' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"light","fontSize":"xx-small"} -->
<p class="has-text-align-center has-light-color has-text-color has-xx-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php printf( esc_html__( '%s', 'olena' ), 'Gutenberg Full Site Editing (FSE) requires no code to create your first website. Use <strong>Olena</strong> <strong>Theme</strong> to build a professional online presence.' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
