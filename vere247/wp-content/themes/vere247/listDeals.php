<?php
/* Template name: Page list deals*/
?>
<?php get_header();?>
 <div class="banner-bar">
        <div class="wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg_contact.png" alt="contact">
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner-bar -->

    <div class="pageTicket">
        <div class="wrapper">
            <div class="content2Col">
                <div class="contentBig">
                    <h2>Bảng cập nhật vé giá rẻ</h2>
					<div class="tableTicket">
                        <table>
                            <tr class="rowFirst">
                                <td>Chuyến bay</td>
                                <td>Điểm khởi hành</td>
                                <td>Điểm đến</td>
                                <td>Hãng hàng không</td>
                                <td>Ngày bay</td>
                                <td>Vé rẻ nhất</td>
                                <td></td>
                            </tr>
                            <?php 
                                $q = new WP_Query("posts_per_page=10&category_name=list-ticket&paged=".get_query_var('paged'));
                                if($q->have_posts()): while($q->have_posts()):$q->the_post(); 
                            ?>
                                <tr>
                                    <td><?php if(get_post_meta(get_the_ID(), 'flight', true)) echo get_post_meta(get_the_ID(), 'flight', true); else echo ""; ?></td>
                                    <td><?php if(get_post_meta(get_the_ID(), 'placeFrom', true)) echo get_post_meta(get_the_ID(), 'placeFrom', true); else echo ""; ?></td>
                                    <td><?php if(get_post_meta(get_the_ID(), 'placeTo', true)) echo get_post_meta(get_the_ID(), 'placeTo', true); else echo ""; ?></td>
                                    <td><?php if(get_post_meta(get_the_ID(), 'airline', true)) echo get_post_meta(get_the_ID(), 'airline', true); else echo ""; ?></td>
                                    <td><?php if(get_post_meta(get_the_ID(), 'dateGo', true)) echo get_post_meta(get_the_ID(), 'dateGo', true); else echo ""; ?></td>
                                    <td><?php if(get_post_meta(get_the_ID(), 'price', true)) echo get_post_meta(get_the_ID(), 'price', true); else echo ""; ?> VNĐ</td>
                                    <td><a href="#" class="buyTicket" data-place-from="<?php if(get_post_meta(get_the_ID(), 'placeFrom', true)) echo get_post_meta(get_the_ID(), 'placeFrom', true); else echo ''; ?>" data-place-come ="<?php if(get_post_meta(get_the_ID(), 'placeTo', true)) echo get_post_meta(get_the_ID(), 'placeTo', true); else echo ''; ?>">Mua vé</a></td>
                                </tr>                       
                            <?php endwhile; 
                                 wp_reset_postdata();
                             else : ?>
                                 <tr><td colspan="7"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></td></tr>
                             <?php endif; ?>
                        </table>
                    </div><!-- /tableTicket --> 
                    <?php numbered_pagination(); ?>
                </div><!-- /contentBig -->
                <?php get_sidebar(); ?>
            </div><!-- /content2col -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /contact -->
<?php get_footer(); ?>