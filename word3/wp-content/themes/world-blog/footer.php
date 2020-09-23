<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package world-blog
 */
 
get_template_part('inc/footer','widget');

?>
    <section class="copyright"> 
        <div class="container"> 
            <div class="row"> 
                <div class="copy text-center col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
	             <p><?php echo 
		         /* translators: %s: CMS name, i.e. WordPress. */
		         esc_html( get_theme_mod( 'copyright_section_text' )); ?></p>
                </div>
            </div>             
        </div>         
       </section>     
	 <?php wp_footer(); ?>
</div> 

