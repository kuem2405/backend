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
                    <?php if (have_posts()) : ?>

                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

                    <?php /* If this is a category archive */ if (is_category()) { ?>
                        <h2><?php single_cat_title(); ?></h2>

                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                        <h2>Posts Tagged :<?php single_tag_title(); ?></h2>

                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>

                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                        <h2>Archive for <?php the_time('F, Y'); ?></h2>

                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                        <h2>Archive for <?php the_time('Y'); ?></h2>

                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                        <h2>Author Archive</h2>

                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                        <h2>Blog Archives</h2>

                    <?php } ?>
                    <?php
                        while(have_posts()):the_post(); 
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
                </div><!-- /contentBig -->
                <?php get_sidebar(); ?>
            </div><!-- /content2col -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /contact -->
<?php get_footer(); ?>