<?php
/**
 * Title: Footer Simple Vertical
 * Slug: olena/footer-simple-vertical
 * Description:
 * Categories: footer, columns
 * Keywords: footer
 * Block Types: core/template-part/footer
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","top":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"40vh"}},"textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull has-contrast-color has-text-color" style="min-height:40vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:site-logo {"align":"center","style":{"spacing":{"margin":{"bottom":"6px"}}}} /-->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","fontSize":"x-small"} -->
<p class="has-text-align-center has-dark-color has-text-color has-link-color has-x-small-font-size"><?php
printf(
    esc_html__( 'Proudly powered by %s', 'olena' ),
    '<a href="' . esc_url( 'https://wordpress.org' ) . '" target="_blank" rel="noreferrer noopener">WordPress</a>'
)
?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|mini","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links is-style-default" style="margin-top:var(--wp--preset--spacing--mini);margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:social-link {"url":"<?php echo esc_url( 'https://twitter.com/#' ); ?>","service":"twitter"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( 'https://instagram.com/#' ); ?>","service":"instagram"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( 'https://www.linkedin.com/in/maksym-marko/' ); ?>","service":"linkedin"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( 'https://facebook.com/#' ); ?>","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
