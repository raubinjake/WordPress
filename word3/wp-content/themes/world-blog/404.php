<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package world-blog
 */

get_header();
?>
<section class="message error-404 not-found">
   <div class="container">
     <div class="row">
       <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="page-content">
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'world-blog' ); ?></h1>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'world-blog' ); ?></p>
				</div>
				<div class="home-btn">
				  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-turn"><?php esc_html_e( 'Home Back', 'world-blog' ); ?></a>
				 </div>
	    </div>
	  </div>
   </div>
</section><!-- .error-404 -->


<?php
get_footer();
