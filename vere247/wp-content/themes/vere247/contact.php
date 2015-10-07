<?php
/*
    Template name: Contact
*/
?>
<?php
    $nameContact = $phoneContact = $emailContact = $addressContact = $noteContact = '';
    $stateContact = $nameContactErr = $phoneContactErr = $emailContactErr = $addressContactErr = $noteContactErr = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contactSubmit'])) {
  if (empty($_POST["nameContact"])) {
    $nameContactErr = "Không được để trống";
  } else {
    $nameContact = test_input($_POST["nameContact"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/[a-zA-Z]+/",$nameContact)||preg_match("/[0-9]+/",$nameContact)) {
      $nameContactErr = "Chỉ nhận kí tự và khoảng trắng"; 
    }
  }
    
  if (empty($_POST["phoneContact"])) {
    $phoneContactErr = "Không được để trống";
  } else {
    $phoneContact = test_input($_POST["phoneContact"]);
    // check if name only contains letters and whitespace
    if (!preg_match(" /^0|01[[:digit:]]{3}[[:digit:]]{3}[[:digit:]]{4}$/ ",$phoneContact)) {
      $phoneContactErr = "Không phải định dạng điện thoại"; 
    }
  }

  if (empty($_POST["emailContact"])) {
    $emailContactErr = "Email is required";
  } else {
    $emailContact = test_input($_POST["emailContact"]);
    // check if e-mail address is well-formed
    if (!filter_var($emailContact, FILTER_VALIDATE_EMAIL)) {
      $emailContactErr = "Invalid email format"; 
    }
  }
  if (empty($_POST["addressContact"])) {
    $addressContactErr = "Không được để trống";
  } else {
    $addressContact = test_input($_POST["addressContact"]);
  }
  if (empty($_POST["contentContact"])) {
    $noteContactErr = "Không được để trống";
  } else {
    $noteContact = test_input($_POST["contentContact"]);
  }
    if($nameContactErr =="" && $emailContactErr =="" && $phoneContactErr ==""){
        $to = get_option( 'admin_email' );
        $subject = "Liên hệ tại Vere247(".get_option('siteurl').")";
        $headers = 'From: '.$nameContact.' <'.$emailContact.'>';
        $body = "Họ và tên: ".$nameContact."\n";
        $body .= "Số điện thoại: ".$phoneContact."\n";
        $body .= "Email: ".$emailContact."\n";
        $body .= "Địa chỉ: ".$addressContact."\n";
        $body .= "Ghi chú:".$noteContact."\n";
        if(wp_mail( $to, $subject, $body, $headers )){
            $stateContact = "Thành công";
        }else{
            $stateContact = "Thất bại";
        }
    }else{
        $stateContact = "Thất bại";
    }
}
?>
<?php get_header();?>
 <div class="banner-bar">
        <div class="wrapper">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg_contact.png" alt="contact">
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /banner-bar -->

    <div class="contact">
        <div class="wrapper">
            <div class="content2Col">
                <div class="contentBig">
                    <div id="formContact" class="boxContact">
                        <h2>Liên hệ</h2>
                        <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ;?>" name="contact" method="post">
                            <div class="mgT1"><p><label for="nameContact">Họ và tên:</label><input type="text" name="nameContact" id="nameContact" class="<?php if($nameContactErr!=''){ echo 'error'; } ?>" value="<?php echo $nameContact; ?>" /><strong><?php if($nameContactErr!=''){ echo $nameContactErr; } ?></strong></p></div>
                            <div class="mgT1"><p><label for="phoneContact">Số điện thoại:</label><input type="text" name="phoneContact" id="phoneContact" class="<?php if($phoneContactErr!=''){ echo 'error'; } ?>" value="<?php echo $phoneContact; ?>" /><strong><?php if($phoneContactErr!=''){ echo $phoneContactErr; } ?></strong></p></div>
                            <div class="mgT1"><p><label for="emailContact">Email:</label><input type="text" name="emailContact" id="emailContact"  class="<?php if($emailContactErr!=''){ echo 'error'; } ?>" value="<?php echo $emailContact; ?>" /><strong><?php if($emailContactErr!=''){ echo $emailContactErr; } ?></strong></p></div>
                            <div class="mgT1"><p><label for="addressContact">Địa chỉ:</label><input type="text" name="addressContact" id="addressContact" value="<?php echo $addressContact; ?>" /></p></div>
                            <div class="mgT1"><p><label for="contentContact">Nội dung:</label></p><p><textarea name="contentContact" id="contentContact"><?php echo $contentContact; ?></textarea></p></div>
                            <div class="notice"><?php echo $stateContact; ?></div>
                            <div class="mgT1 submitContact"><input type="submit" id="submitContact" name="contactSubmit" value="Gửi yêu cầu" /></div>
                        </form>
                    </div><!-- /formContact -->
                    <div class="boxContact">
                        <h2>Tư vấn - hỗ trợ đặt vé</h2>
                        <div class="personContact">
                            <div class="namePerson">VÕ VĂN SĨ</div>
                            <div class="phonePerson"><a href="tel:0985533689"><i class="fa fa-phone"></i>0985533689</a></div>
                            <div class="emailPerson"><a href="mailto:vere247@gmail.com"><i class="fa fa-envelope-o"></i>vere247@gmail.com</a></div>
                        </div><!-- /personContact -->
                        <div class="personContact">
                            <div class="namePerson">VÕ VĂN SĨ</div>
                            <div class="phonePerson"><a href="tel:0985533689"><i class="fa fa-phone"></i>0985533689</a></div>
                            <div class="emailPerson"><a href="mailto:vere247@gmail.com"><i class="fa fa-envelope-o"></i>vere247@gmail.com</a></div>
                        </div><!-- /personContact -->
                        <div class="personContact">
                            <div class="namePerson">VÕ VĂN SĨ</div>
                            <div class="phonePerson"><a href="tel:0985533689"><i class="fa fa-phone"></i>0985533689</a></div>
                            <div class="emailPerson"><a href="mailto:vere247@gmail.com"><i class="fa fa-envelope-o"></i>vere247@gmail.com</a></div>
                        </div><!-- /personContact -->
                    </div><!-- /boxContact -->
                </div><!-- /contentBig -->
                <?php get_sidebar(); ?>
            </div><!-- /content2col -->
            <div id="mapContact">
                <div class="infoMap">
                    <h2>Văn phòng <span>Tân Bình</span></h2>
                    <p>457-459 Âu Cơ, Quận Tân Bình, HCM</p>
                </div><!-- /infoMap -->
                <div class="contentMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1840326188953!2d106.6378926!3d10.7972128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752953ccc59a2f%3A0xdca43ef7af778e65!2zNDU3IMOCdSBDxqEsIHBoxrDhu51uZyAxNCwgUXXhuq1uIDExLCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1439475433670" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!-- /contentMap -->
            </div><!-- /mapContact -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /contact -->
<?php get_footer(); ?>