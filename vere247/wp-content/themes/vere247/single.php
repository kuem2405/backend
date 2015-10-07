<?php get_header();?>
 <div class="banner-bar">
        <div class="wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg_contact.png" alt="contact">
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner-bar -->

    <div class="post">
        <div class="wrapper">
            <div class="content2Col">
                <div class="contentBig">
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <div class="datePost"><span>Ngày đăng : </span> <?php the_time("h:i:s a d/m/Y"); ?></div>
                        <div class="contentPost">
                            <?php the_content(); ?>
                        </div><!-- /contentPost -->
                        <div class="tagPost">
                            Tag:
                            <?php 
                                $tags = get_the_tags();
                                if($tags){
                                    foreach ( $tags as $tag ) {
                                        $tag_link = get_tag_link( $tag->term_id );
                                        echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>"."{$tag->name}</a>";
                                    }
                                }
                            ?>
                        </div><!-- /tagPost -->
                        <div class="social">
                            <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count"></div>

                        </div><!-- /social -->
                        <div class="commentPost">
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
                        </div><!-- /commentPost -->
                    
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