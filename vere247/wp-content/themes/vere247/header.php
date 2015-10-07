<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_directory") ?>/images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Đặt vé máy bay trực tuyến giá rẻ Vietnam Airlines, Jetstar và VietJetAir.">
    <meta name="keywords" content="vé máy bay, vé rẻ, vere247, vere247.vn, 247, Vietnam Airlines, Jetstar, VietJetAir">
    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="header">
        <div class="wrapper">
            <div class="logo">
                <h1><a href="<?php bloginfo("home"); ?>"><img src="<?php bloginfo("template_directory") ?>/images/logo_128.png" alt="vere247"> Vé Rẻ 247</a></h1>
                <h2>Vé Giá Rẻ Mỗi Ngày</h2>
            </div>
            <!-- /logo -->
            <div class="head-nav">
                <ul class="advantage">
                    <li><i class="fa fa-money"></i> GIÁ TỐT NHẤT</li>
                    <li><i class="fa fa-support"></i> TẬN TÌNH</li>
                    <li><i class="fa fa-cc-visa"></i> THANH TOÁN DỄ DÀNG</li>
                </ul>
                <!-- /advantage -->
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_top',
                        'container' => '',
                        'menu_class' => 'ul-nav'
                    )); ?>
                <!--<ul class="ul-nav">
                    <li class="active"><a href="#"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="noberder"><a href="#">VÉ GIÁ RẺ</a>
                    </li>
                    <li><a href="#">TIN KHUYẾN MÃI</a>
                    </li>
                    <li><a href="#">BLOG</a>
                    </li>
                    <li><a href="#">LIÊN HỆ</a>
                    </li>
                </ul>-->
                <!-- /ul-nav -->
            </div>
            <!-- /head-nav -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /header -->