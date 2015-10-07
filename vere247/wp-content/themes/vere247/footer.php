 <div class="footer">
        <div class="bottom-nav">
            <div class="wrapper">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu_bottom',
                        'container' => '',
                        'menu_class' => 'nav-left'
                    ));
                ?>
                <!--<ul class="nav-left">
                    <li><a href="#">VỀ CHÚNG TÔI</a>
                    </li>
                    <li><a href="#">HỎI ĐÁP</a>
                    </li>
                    <li><a href="#">ĐIỀU KHOẢN &amp; ĐIỀU KIỆN</a>
                    </li>
                    <li><a href="#">CHÍNH SÁCH RIÊNG TƯ</a>
                    </li>
                </ul>-->
                <ul class="nav-right">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /bottom-nav -->
        <div class="wrapper">
            <dl>
                <dd>
                    <h2>Thông Tin Thanh Toán</h2>
                    <p>
                        <b><i class="fa fa-bank"></i> Ngân Hàng Vietcombank</b>
                        <br>Chi nhánh Tân Bình
                        <br>Chủ TK: VÕ VĂN SĨ
                        <br>Số TK: 0441000640358
                    </p>
                    <p>
                        <b><i class="fa fa-bank"></i> Ngân Hàng ACB</b>
                        <br>Chi nhánh An Sương
                        <br>Chủ TK: VÕ VĂN SĨ
                        <br>Số TK: 185460559
                    </p>
                </dd>
                <dd>
                    <h2>Thông Tin Liên Lạc</h2>
                    <p>
                        <b><i class="fa fa-phone-square"></i> Hotline 1:</b>
                        <br>0985533689
                    </p>
                    <p>
                        <b><i class="fa fa-phone-square"></i> Hotline 2:</b>
                        <br>0983960921
                    </p>
                    <p>
                        <b><i class="fa fa-skype"></i> Skype:</b>
                        <br>ptkhue_197
                    </p>
                </dd>
                <dd>
                    <h2>Bản Đồ</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62708.14275556129!2d106.62720155!3d10.79147045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bf733e69175%3A0xd8d63453733325fe!2zVMOibiBQaMO6LCBIbyBDaGkgTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1439110380375" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
                </dd>
            </dl>
        </div>
        <!-- /wrapper -->
        <small style="padding:0.5em 1em; text-align:center;">Copyright &copy; 2015 by Yu-kan</small>
    </div>
    <!-- /footer -->
<script type="application/javascript" src="<?php  bloginfo('template_directory'); ?>/theme_file/js/modernizr.custom.28468.js"></script>
<?php wp_footer(); ?>
    <script>
        $(function () {
            $('#da-slider').cslider({
                autoplay: true,
                interval: 6800,
                bgincrement: 250
            });
        });
        $('#airline').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 800,
            arrows: false,
            slidesToShow: 8,
            slidesToScroll: 8,
            responsive: [
                {
                    breakpoint: 1900,
                    settings: {
                        slidesToShow: 7,
                        slidesToScroll: 7
                    }
    },
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
    },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
    },
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
    },
                {
                    breakpoint: 680,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
    },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
        $('.booking-items').slick({
            dots: false,
            infinite: true,
            speed: 600,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
    },
                {
                    breakpoint: 981,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
    },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
    },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
        $('#bank').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 800,
            arrows: false,
            slidesToShow: 9,
            slidesToScroll: 9,
            responsive: [
                {
                    breakpoint: 1900,
                    settings: {
                        slidesToShow: 8,
                        slidesToScroll: 8
                    }
    },
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 7,
                        slidesToScroll: 7
                    }
    },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
    },
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
    },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
    },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
        $('.comments').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 10000,
            speed: 800,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
    },
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
    },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
        
        $(function() {
            $( "#dateFrom" ).datepicker({ minDate: 0});
            $( "#dateCome" ).datepicker({ minDate: 0});
        });
    </script>

</body>

</html>