<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package world-blog
 */

get_header();
?>
<div class="page-top">
 <div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	 	<?php
		the_archive_title( '<h3>', '</h3>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
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
	 
	  <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
  </div>
  <?php get_sidebar(); ?>
 </div>
</div>
<?php
get_footer();
