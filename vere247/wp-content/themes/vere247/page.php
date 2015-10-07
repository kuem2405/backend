<?php get_header();?>
 <div class="banner-bar">
        <div class="wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg_contact.png" alt="contact">
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner-bar -->

    <div class="page">
        <div class="wrapper">
            <div class="content2Col">
                <div class="contentBig">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <div class="contentPage">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; 
                             wp_reset_postdata();
                         else : ?>
                             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                         <?php endif; ?>
                  </div><!-- /contentBig -->
                <?php get_sidebar(); ?>
            </div><!-- /content2col -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /contact -->
<?php get_footer(); ?>