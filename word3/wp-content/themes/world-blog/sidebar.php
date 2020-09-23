<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package world-blog
 */

if ( ! is_active_sidebar( 'right_sidebar' ) ) {
	return;
}
?>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'right_sidebar' ); ?>
</aside><!-- #secondary -->
</div>
