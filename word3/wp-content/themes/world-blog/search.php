<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package world-blog
 */

get_header();

?>

<div class="page-top">
 <div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<h3>
		<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'world-blog' ), '<span>' . get_search_query() . '</span>' );
		?>
		</h3>
    </div>
		<div class="breadcrumb col-lg-4 col-md-4 col-sm-12 col-xs-12">
     <ul><li><?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?> </li></ul>
    </div>
  </div>
 </div>
</div>
	 
<div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
   </div>
   <?php get_sidebar(); ?>
  </div>
</div>
<?php
get_footer();