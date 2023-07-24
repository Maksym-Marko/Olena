<?php
/**
 * Title: Footer Simple
 * Slug: footer-simple
 * Description:
 * Categories: footer, columns
 * Keywords: footer
 * Block Types: core/template-part/footer
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size"><!-- wp:site-title {"style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"dark","fontSize":"x-small"} /-->

<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"dark","fontSize":"xxx-small"} -->
<p class="has-dark-color has-text-color has-link-color has-xxx-small-font-size"><?php
printf(
    esc_html__( '© Copyright 2023 | Olena Theme by %s %s', 'olena' ),
    '<a href="' . esc_url( 'https://markomaksym.com.ua/' ) . '" target="_blank" rel="noreferrer noopener">Maksym Marko</a>',
    __( '| All rights reserved | Powered by WordPress', 'olena' )
)
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"light","iconColorValue":"#ffffff","iconBackgroundColor":{"color":"#4c40d4","name":"Main","slug":"main","class":"has-main-icon-background-color"},"iconBackgroundColorValue":"#4c40d4","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|mini","left":"var:preset|spacing|mini"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:social-link {"url":"<?php echo esc_url( 'https://twitter.com/#' ); ?>","service":"twitter"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( 'https://instagram.com/#' ); ?>","service":"instagram"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( 'https://www.linkedin.com/in/maksym-marko/' ); ?>","service":"linkedin"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( 'https://facebook.com/#' ); ?>","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
