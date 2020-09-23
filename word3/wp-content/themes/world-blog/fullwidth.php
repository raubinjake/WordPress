<?php
/**
 * Template Name: Fullwidth
*/
get_header();

?>
<div class="page-builder">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php if( $post->post_content != "" )
			{ ?>
			<div class="blog-lg-area-left">
			<?php if( have_posts()) :  the_post(); ?>		
			<?php the_content(); ?>
				<?php endif; ?>
			</div>
			<?php } ?>			
				<?php comments_template( '', true );  ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>