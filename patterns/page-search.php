<?php

/**
 * Title: Page Search
 * Slug: olena/page-search
 * Inserter: no
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|mini","left":"var:preset|spacing|mini"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--mini);padding-bottom:0;padding-left:var(--wp--preset--spacing--mini)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search","textColor":"dark","fontSize":"large"} /-->

<!-- wp:search {"label":"","placeholder":"Search site...","buttonText":"Search","style":{"border":{"width":"1px","radius":"0px"}},"borderColor":"main-dark","fontSize":"xx-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|mini","left":"var:preset|spacing|mini"},"blockGap":"0"}}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--mini);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--mini)"><!-- wp:query {"queryId":0,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontSize":"small"} -->
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"large"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"main-dark","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-main-dark-color has-alpha-channel-opacity has-main-dark-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"xx-small"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"fontSize":"x-small"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php printf( esc_html__( '%s', 'olena' ), __( 'Sorry, nothing was found for that search term.', 'olena' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
