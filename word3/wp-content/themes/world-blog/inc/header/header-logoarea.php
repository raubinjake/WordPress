		<div class="logoarea">
			 <div class="container">
			   <div class="row">
			               <div class="brand col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
		                        <div class="site-branding">
			                       <?php
			                        the_custom_logo();
			                        if ( is_front_page() && is_home() ) :
				                    ?>
				                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				                    <?php
			                         else :
				                     ?>
				                     <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				                     <?php
			                         endif;
			                        $world_blog_description = get_bloginfo( 'description', 'display' );
			                        if ( $world_blog_description || is_customize_preview() ) :
				                     ?>
				                    <p class="site-description"><?php echo esc_html($world_blog_description); /* WPCS: xss ok. */ ?></p>
			                        <?php endif; ?>
		                        </div><!-- .site-branding -->

                                <span class="toggle_menu"><span></span></span> 
                            </div>
						</div>
					</div>
				 </div>