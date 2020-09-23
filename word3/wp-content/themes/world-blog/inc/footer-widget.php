 <section class="footer-widget"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4"> 
                    <?php if ( is_active_sidebar( 'footer_widget_1' ) ) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer_widget_1' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4"> 
                    <?php if ( is_active_sidebar( 'footer_widget_2' ) ) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer_widget_2' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4"> 
                    <?php if ( is_active_sidebar( 'footer_widget_3' ) ) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer_widget_3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>                 
            </div>             
        </div>         
    </section>