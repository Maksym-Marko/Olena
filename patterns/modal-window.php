<?php
/**
 * Title: Modal Window
 * Slug: modal-window
 * Description: You can create any number of modal windows. The template of usage: modal window - #modal-window | open modal window - a[href="#open-modal-window"] | close modal window - a[href="#close-modal-window"]
 * Categories: featured
 * Keywords: modal, window
 * Inserter: true
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"var:preset|spacing|mini","bottom":"0","left":"var:preset|spacing|mini"},"blockGap":"0"},"color":{"background":"#4239bfd9"}},"className":"mx-modal-window","layout":{"type":"constrained","contentSize":"720px"}} -->
<div id="modal-window" class="wp-block-group mx-modal-window has-background" style="background-color:#4239bfd9;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--mini);padding-bottom:0;padding-left:var(--wp--preset--spacing--mini)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
<div class="wp-block-group is-style-default" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"16px"}},"backgroundColor":"main-light","className":"is-style-animation-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-animation-wrapper has-main-light-background-color has-background" style="border-radius:16px;margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"sb-modal-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group sb-modal-header" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":424,"width":94,"height":94,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olena-logo.png" alt="" class="wp-image-424" style="width:94px;height:94px" width="94" height="94"/></figure><!-- /wp:image -->
</div><!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"right","id":428,"sizeSlug":"full","linkDestination":"custom","className":"close-modal-window"} -->
<figure class="wp-block-image alignright size-full close-modal-window"><a href="#close-modal-window"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/close-button.png" alt="" class="wp-image-428"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"className":"sb-modal-body","layout":{"type":"constrained"}} -->
<div class="wp-block-group sb-modal-body" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:heading {"style":{"typography":{"lineHeight":1.4}},"textColor":"dark","fontSize":"large"} -->
<h2 class="wp-block-heading has-dark-color has-text-color has-large-font-size" style="line-height:1.4"><?php echo __( 'Start your website right now!', 'olena' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.4,"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"6px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"dark","fontSize":"small","fontFamily":"roboto"} -->
<h3 class="wp-block-heading has-dark-color has-text-color has-roboto-font-family has-small-font-size" style="margin-top:6px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-style:normal;font-weight:300;line-height:1.4"><?php echo __( 'Use 29 prebuilt patterns to start your journey', 'olena' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __( 'Maksym Marko did his best to create a flexible and fast Wordpress theme for wide usages. The Olena theme has almost all you need to start your website right now!', 'olena' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="https://wordpress.org/themes/olena/"><?php echo __( 'Get Olena Theme For Free', 'olena' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php if(olena_is_olena_blocks_set_activated()) : ?>

<!-- wp:olena/floating-box -->
<div class="wp-block-olena-floating-box" style="right:-14%;bottom:-42%" data-orientation="3" data-position-left="-10" data-position-top="-15" data-position-right="-14" data-position-bottom="-42"><!-- wp:olena/responsive-box {"unique_class":"mx-responsive-box-BgiotLnHOeg9"} -->
<div data-breakpoint="desktop-tablets" class="mx-responsive-box mx-responsive-box-BgiotLnHOeg9"><div class="wp-block-olena-responsive-box"><style>@media (max-width: 767.5px) {
		.mx-responsive-box.mx-responsive-box-BgiotLnHOeg9 {
			display: none !important;
		}
		.editor-styles-wrapper .mx-responsive-box.mx-responsive-box-BgiotLnHOeg9 {
			display: block !important;
			opacity: 0.5;
		}
	}						
</style><!-- wp:image {"id":61,"width":447,"height":447,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/animations/bubble_2.svg" alt="" class="wp-image-61" width="447" height="447"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:olena/responsive-box --></div>
<!-- /wp:olena/floating-box -->
<?php endif; ?>

</div><!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
