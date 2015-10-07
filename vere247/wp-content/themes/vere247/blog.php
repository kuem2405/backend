<?php
/* Template name: Page Blog*/
?>
<?php get_header();?>
 <div class="banner-bar">
        <div class="wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg_contact.png" alt="contact">
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner-bar -->

    <div class="blog">
        <div class="wrapper">
            <div class="content2Col">
                <div class="contentBig">
                    <h2>Tin khuyến mãi</h2>
                    <?php 
                        $q = new WP_Query("posts_per_page=10&category_name=blog&paged=".get_query_var('paged'));
                        if($q->have_posts()): while($q->have_posts()):$q->the_post(); 
                    ?>
                        <div class="postBlog">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="box-content">
                            <div class="datePost"> <p><i class="fa fa-clock-o"></i> <?php the_time('h:m:s'); ?></p><p><i class="fa fa-calendar"></i> <?php the_time('d/m/Y'); ?></p></div>
                            <div class="blogContent">
                                <div class="thumnail">
                                    <?php if(has_post_thumbnail()) the_post_thumbnail(); else echo '<img src="'.get_bloginfo("template_directory").'/images/no_img.png" alt="">'; ?>
                                </div><!-- /thumnail -->
                                <div class="content">
                                    <?php the_excerpt(); ?>
                                </div><!-- /content -->
                            </div><!-- / blogContent -->
                            </div><!-- /box-content -->
                        </div><!-- /postBlog -->                    
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