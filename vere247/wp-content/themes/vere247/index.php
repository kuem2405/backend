<?php get_header(); ?>
<div class="slider-top pc">
        <div id="da-slider" class="da-slider">
            <?php 
                $q = new WP_Query('category_name=slider'); 
                if($q->have_posts()) : while($q->have_posts()):$q->the_post();
            ?>
                <div class="da-slide">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <a href="tel:<?php if(get_post_meta(get_the_ID(), 'phone', true)) echo get_post_meta(get_the_ID(), 'phone', true);  ?>" class="da-link">
                        <i class="fa fa-phone"></i> Gọi Ngay <?php if(get_post_meta(get_the_ID(), 'phone', true)) echo get_post_meta(get_the_ID(), 'phone', true);  ?>
                    </a>
                    <div class="da-img">
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }else{
                                echo "<img src='".get_bloginfo('template_directory')."/images/no_img.png' alt='image02' />";
                            }
                        ?>
                    </div>
                </div>
            <?php endwhile; 
                 wp_reset_postdata();
             else : ?>
                 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
             <?php endif; ?>
            <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </nav>
        </div>
    </div>
    <!-- /slider-top -->

    <div class="banner-sp sp">
        <img src="<?php bloginfo("template_directory"); ?>/images/bangkok.jpg" alt="bangkok">
        <h2><b class="cl-orangle"><i class="fa fa-plane"></i> BANGKOK</b> từ <b class="cl-orangle">2.217.000 VND</b></h2>
    </div>
    <!-- banner-sp -->

    <div class="slider responsive logo-slider" id="airline">
        <?php
            $q = new WP_Query('category_name=company-airline');
            if($q -> have_posts()): while ($q -> have_posts()) : $q -> the_post();
        ?>
            <div>
                <a href="<?php if(get_post_meta(get_the_ID(), 'link', true)) echo get_post_meta(get_the_ID(), 'link', true); else echo "#"; ?>">
                <?php if(has_post_thumbnail()) the_post_thumbnail(); else echo '<img src="'.get_bloginfo("template_directory").'/images/no_img.png" alt="vietnam-airlines">'; ?>                    
                </a>
            </div>
        <?php endwhile; 
             wp_reset_postdata();
         else : ?>
             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
    </div>
    <!-- /logo-slider -->

    <div class="advantage-bar">
        <div class="wrapper">
            <div>
                <h2>HỖ TRỢ</h2>
                <p>TẬN TÌNH, CHU ĐÁO</p>
            </div>
            <div>
                <h2>KHUYẾN MÃI</h2>
                <p>NHIỀU ƯU ĐÃI LỚN CHO KHÁCH HÀNG</p>
            </div>
            <div>
                <h2>0985533689</h2>
                <p>CHĂM SÓC KH 24/7</p>
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /advantage-bar -->

    <div class="ads-bar">
        <div class="wrapper">
            <h2>THÔNG TIN KHUYẾN MÃI</h2>
            <p>Rất nhiều các chuyến bay giá rẻ được cập nhật liên tục để bạn lựa chọn. </p>

            <div class="booking-list">
                <h3>CHUYẾN BAY NỘI ĐỊA</h3>
                <div class="slider responsive booking-items">
                <?php
                    $q = new WP_Query('category_name=inland');
                    if($q -> have_posts()): while($q -> have_posts()): $q ->the_post();
                ?>
                    <div class="booking-item">
                        <a href="<?php the_permalink(); ?>" data-just="Chỉ Từ" data-price="<?php if(get_post_meta(get_the_ID(), 'price', true)) echo number_format(get_post_meta(get_the_ID(), 'price', true), 0,',', '.'); ?> (VND)"><?php if(has_post_thumbnail()) the_post_thumbnail(); else echo '<img src="'.get_bloginfo("template_directory").'/images/no_img.png" alt="">'; ?>
                        </a>
                        <h4><?php if(get_post_meta(get_the_ID(), 'placeFrom', true)) echo get_post_meta(get_the_ID(), 'placeFrom', true) ?> <i class="fa fa-plane"></i>  <?php if(get_post_meta(get_the_ID(), 'placeTo', true)) echo get_post_meta(get_the_ID(), 'placeTo', true) ?></h4>
                    </div>
                <?php endwhile; 
                     wp_reset_postdata();
                 else : ?>
                     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                 <?php endif; ?>
                </div>
                <!-- /booking-items -->
            </div>
            <!-- /booking-list -->

            <div class="booking-list">
                <h3>CHUYẾN BAY QUỐC TẾ</h3>
                <div class="slider responsive booking-items">
                    <?php
                    $q = new WP_Query('category_name=international');
                    if($q -> have_posts()): while($q -> have_posts()): $q ->the_post();
                ?>
                    <div class="booking-item">
                        <a href="<?php the_permalink(); ?>" data-just="Chỉ Từ" data-price="<?php if(get_post_meta(get_the_ID(), 'price', true)) echo number_format(get_post_meta(get_the_ID(), 'price', true), 0,',', '.'); ?> (VND)"><?php if(has_post_thumbnail()) the_post_thumbnail(); else echo '<img src="'.get_bloginfo("template_directory").'/images/no_img.png" alt="">'; ?>
                        </a>
                        <h4><?php if(get_post_meta(get_the_ID(), 'placeFrom', true)) echo get_post_meta(get_the_ID(), 'placeFrom', true) ?> <i class="fa fa-plane"></i> <?php if(get_post_meta(get_the_ID(), 'placeTo', true)) echo get_post_meta(get_the_ID(), 'placeTo', true) ?></h4>
                    </div>
                <?php endwhile; 
                     wp_reset_postdata();
                 else : ?>
                     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                 <?php endif; ?>
                </div>
                <!-- /booking-items -->
            </div>
            <!-- /booking-list -->

        </div>
        <!-- /wrapper -->
    </div>
    <!-- /ads-bar -->

    <div class="payment-bar">
        <div class="wrapper col">
            <div class="left-side">
                <h2>HÌNH THỨC THANH TOÁN</h2>
                <h3>Thanh Toán tại nhà</h3>
                <p>Nhân viên VERE247 sẽ giao vé & thu tiền tại nhà theo địa chỉ quý khách cung cấp.</p>
                <h3>Thanh Toán Qua Chuyển khoản</h3>
                <p>Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, Internet banking.</p>
                <h3>Thanh Toán tại văn phòng VERE247</h3>
                <p>Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng ABAY để thanh toán và nhận vé.</p>
                <h3>Thanh Toán Qua các cổng thanh toán điện tử</h3>
                <p>Quý khách có thể thanh toán ngay (trực tuyến) thông qua cổng 123Pay, Senpay, Ngân Lượng.</p>

            </div>
            <!-- /left-side -->

            <div class="rigth-side">
                <h2>TẠI SAO CHỌN VERE247</h2>
                <p><i class="fa fa-clock-o"></i> Đặt vé nhanh chóng</p>
                <p><i class="fa fa-money"></i> Đảm bảo giá tốt nhất</p>
                <p><i class="fa fa-line-chart"></i> Các chương trình khuyến mại hấp dẫn</p>
                <p><i class="fa fa-credit-card"></i> Dịch vụ tin cậy - giá trị đích thực</p>
                <p><i class="fa fa-coffee"></i> Hỗ trợ tận tình - chu đáo 24/7</p>
                <p><i class="fa fa-child"></i> Thanh toán dễ dàng, đa dạng</p>
            </div>
            <!-- /right-side -->

        </div>
        <!-- /wrapper -->
    </div>
    <!-- /payment-bar -->

    <div class="slider responsive logo-slider" id="bank">
        <?php
            $q = new WP_Query('category_name=the-bank');
            if($q -> have_posts()): while ($q -> have_posts()) : $q -> the_post();
        ?>
        <div>
            <a href="<?php if(get_post_meta(get_the_ID(), 'link', true)) echo get_post_meta(get_the_ID(), 'link', true); else echo "#"; ?>"><?php if(has_post_thumbnail()) the_post_thumbnail(); else echo '<img src="'.get_bloginfo("template_directory").'/images/no_img.png" alt="">'; ?>
            </a>
        </div>
        <?php endwhile; 
             wp_reset_postdata();
         else : ?>
             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
    </div>
    <!-- /logo-slider -->

    <div class="comments-bar">
        <div class="wrapper">
            <h2>CẢM NHẬN TỪ KHÁCH HÀNG</h2>
            <div class="slider responsive comments">
                <div class="comment">Dịch vụ đặt vé nhanh chóng, chăm sóc khách hàng rất tốt, sẽ quay lại nếu có dịp.</div>
                <div class="comment">Nhiều thông tin du lịch khá là bổ ích, mong các bạn tiếp tục cập nhật nhiều hơn.</div>
                <div class="comment">Nhân viên nhiệt tình, chu đáo , thanh toán thuận tiện, Chúc Vere247 ngày càng thành công.</div>
                <div class="comment">Tôi ở đà nẵng, mới tìm đến vere247 trên mạng, mua vé 1 lần nhưng cảm thấy hài lòng về cách thanh toán nhanh gọn, giá cả hợp lý. </div>
                <div class="comment">Tôi khá là khó tính và không mấy khi tin tưởng các dịch vụ hay web trên mạng, nhưng từ lần book vé máy bay qua Vegiare tôi thấy rất hài lòng.</div>
            </div>
            <!-- /comments -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /comments-bar -->
<?php get_footer(); ?>