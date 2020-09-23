<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package world-blog
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>> 
    <head> 
	
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">          
	    <link rel="profile" href="https://gmpg.org/xfn/11">
                                                  
        <?php wp_head(); ?>
    </head>     
    <body <?php body_class(); ?>>          
     
        <div id="canvas"> 
            <div id="box_wrapper"> 
			
	         <?php get_template_part('inc/header/header','topline'); ?>
			
			<?php get_template_part('inc/header/header','logoarea'); ?>

              </div>							
                <header class="page_header header_white columns_padding_0 table_section toggle_menu_right"> 
                    <div class="container"> 
                        <div class="row">                 
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                <!-- main nav start -->                                 
                                <nav class="mainmenu_wrapper"> 
                                    <?php wp_nav_menu( array(
			                         'theme_location'    => 'primary',
			                         'container'         => 'div',
			                         'menu_class'        => 'mainmenu nav sf-menu',
			                         'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			                         'walker'            => new WP_Bootstrap_Navwalker(),
		                             ) );
			                          ?> 
								</nav> 
                               							
                            </div>                       
                        </div>                         
                    </div>                     
                </header>                 
            </div>
        </div>         