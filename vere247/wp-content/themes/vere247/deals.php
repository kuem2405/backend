<?php
/* Template name: Page Deals*/
?>
<?php get_header();?>
 <div class="banner-bar">
        <div class="wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg_contact.png" alt="contact">
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner-bar -->

    <div class="deals">
        <div class="wrapper">
            <div class="content2Col">
                <div class="contentBig">
                    <h2>Tin khuyến mãi</h2>
                    <?php
                        $wp_query = new WP_Query("posts_per_page=10&category_name=deals&paged=".get_query_var('paged'));
                        if($wp_query->have_posts()): while($wp_query->have_posts()):$wp_query->the_post(); 
                    ?>
                        <div class="postDeal">
                            <div class="thumnail">
                                <?php if(has_post_thumbnail()) the_post_thumbnail(); else echo '<img src="'.get_bloginfo("template_directory").'/images/no_img.png" alt="">'; ?>
                            </div><!-- /thumnail -->
                            <div class="box-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="datePost"><i class="fa fa-calendar"></i><?php the_time("d/m/Y h:m:s"); ?></div>
                                <div class="content">
                                    <?php the_excerpt(); ?>
                                </div><!-- /content -->                                
                            </div><!-- /box-content -->
                        </div><!-- /postDeal --> 
                    <?php endwhile; 
                         wp_reset_postdata();
                     else : ?>
                         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                     <?php endif; ?>
                    <?php numbered_pagination(); ?>
                </div><!-- /contentBig -->
                <?php get_sidebar(); ?>
            </div><!-- /content2col -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /contact -->
<?php get_footer(); ?>