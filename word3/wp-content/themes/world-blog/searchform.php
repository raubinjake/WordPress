<?php
/**
 * Template for displaying search forms in world-blog
 *
 * @package WordPress
 * @subpackage world-blog
 * @since 1.0
 * @version 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:','world-blog' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'world-blog' ); ?>"  value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
	
	<button type="submit" class="search-submit"><span class="screen-reader-text_1"><?php echo esc_html_e( 'Search','world-blog' ); ?></button>

	</label>
</form>


