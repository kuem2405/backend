<?php
// define variables and set to empty values
$phone = $placeFrom = $placeCome = $dateFrom = $dateCome = $note ="";
$phoneErr = $placeFromErr = $placeComeErr = $dateFromErr = $dateComeErr = $noteErr = $state ="";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Không được để trống";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!preg_match(" /^0|01[[:digit:]]{3}[[:digit:]]{3}[[:digit:]]{4}$/ ",$phone)) {
      $phoneErr = "Không phải định dạng điện thoại"; 
    }
  }
  if (empty($_POST["placeFrom"])) {
    $placeFromErr = "Không được để trống";
  } else {
    $placeFrom = test_input($_POST["placeFrom"]);
  }
  if (empty($_POST["placeCome"])) {
    $placeComeErr = "Không được để trống";
  } else {
    $placeCome = test_input($_POST["placeCome"]);
  }
  if (empty($_POST["dateFrom"])) {
    $dateFromErr = "Không được để trống";
  } else {
    $dateFrom = test_input($_POST["dateFrom"]);
  }
  if (empty($_POST["dateCome"])) {
    $dateComeErr = "Không được để trống";
  } else {
    $dateCome = test_input($_POST["dateCome"]);
      if($dateFrom>$dateCome){
          $dateComeErr = "Ngày về phải sau ngày đi";
      }
  }
  if (empty($_POST["content"])) {
    $noteErr = "Không được để trống";
  } else {
    $note = test_input($_POST["content"]);
  }
    if($phoneErr =="" && $placeFromErr =="" && $placeComeErr =="" && $dateFromErr =="" && $dateComeErr ==""){
        $to = get_option( 'admin_email' );
        $subject = "Đặt vé máy bay tại trang Vere247(".get_option('siteurl').")";
        $headers = 'From: vere247.vn';
        $body .= "Số điện thoại: ".$phone."\n";
        $body .= "Nơi đi: ".$placeFrom."\n";
        $body .= "Nơi đến: ".$placeCome."\n";
        $body .= "Ngày đi: ".$dateFrom."\n";
        $body .= "Ngày về:".$dateCome."\n";
        $body .= "Ghi chú:".$note."\n";
        if(wp_mail( $to, $subject, $body, $headers )){
            $state = true;
        }else{
            $state = false;
        }
    }else{
        $state = false;
    }
}
?>
<div class="contentSmall">
    <div id="formTicket" class="boxContact borderDashed">
        <h2><i class="fa fa-ticket"></i>Đặt vé máy bay</h2>
        <form method="post" name="ticketBook" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ;?>"> 
            <div class="mgT1"><p><label for="phone">Số điện thoại:</label><span><?php if($phoneErr!="") echo $phoneErr; ?></span></p><p><input type="text" name="phone" id="phone" class="<?php if($phoneErr!="") echo "error"; ?>" value="<?php echo $phone; ?>" /></p></div>
            <div class="mgT1"><p><label for="placeFrom">Nơi đi:</label><span><?php if($placeFromErr!="") echo $placeFromErr; ?></span></p><p><input type="text" name="placeFrom" id="placeFrom" list="add"  class="<?php if($placeFromErr!="") echo "error"; ?>" value="<?php echo $placeFrom; ?>" /></p></div>
            <div class="mgT1"><p><label for="placeCome">Nơi đến:</label><span><?php if($placeComeErr!="") echo $placeComeErr; ?></span></p><p><input type="text" name="placeCome" id="placeCome" list="add" onfocus=""  class="<?php if($placeComeErr!="") echo "error"; ?>" value="<?php echo $placeCome; ?>" /></p></div>
            <div class="mgT1"><p><label for="dateFrom">Ngày đi:</label><span><?php if($dateFromErr!="") echo $dateFromErr; ?></span></p><p><input type="text" name="dateFrom" id="dateFrom"  class="<?php if($dateFromErr!="") echo "error"; ?>" value="<?php echo $dateFrom; ?>" /></p></div>
            <div class="mgT1"><p><label for="dateCome">Ngày về:</label><span><?php if($dateComeErr!="") echo $dateComeErr; ?></span></p><p><input type="text" name="dateCome" id="dateCome"  class="<?php if($dateComeErr!="") echo "error"; ?>" value="<?php echo $dateCome; ?>" /></p></div>
            <div class="mgT1"><p><label for="content">Ghi chú:</label></p><p><textarea id="content" name="content" ><?php echo $note ?></textarea></p></div>
            <p class="<?php if($state==true) echo 'notice'; else echo 'error'; ?>"><?php if($state==true) echo 'Gửi thành công'; else echo 'Gửi thất bại'; ?></p>
            <div class="mgT1 textAlC"><p><input type="submit" id="submit" name="send" value="Gửi yêu cầu" /></p></div>
        </form>
    </div><!-- /formContact -->
    <div class="facePage">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="100%" data-height="auto" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
    </div><!-- /facePage -->
</div><!-- / contentSmall -->
<datalist id="add">
  <option value="Hà Nội (HAN)">
  <option value="Hải Phòng (HPH)">
  <option value="Điện Biên Phủ (DIN)">
  <option value="Đà Nẵng (DAD)">
  <option value="Huế (HUI)">
  <option value="Đồng Hới (VDH)">
  <option value="Quy Nhơn (UIH)">
  <option value="Vinh (VII)">
  <option value="Tuy Hoà (TBB)">
  <option value="Chu Lai (VCL)">
  <option value="Tam Kỳ (VCL)">
  <option value="Thanh Hoá (THD)">
  <option value="TP Hồ Chí Minh (SGN)">
  <option value="Nha Trang (CXR)">
  <option value="Buôn Ma Thuột (BMV)">
  <option value="Cà Mau (CAH)">
  <option value="Côn Đảo (VCS)">
  <option value="Phú Quốc (PQC)">
  <option value="Pleiku (PXU)">
  <option value="Cần Thơ (VCA)">
  <option value="Đà Lạt (DLI)">
  <option value="Rạch Giá (VKG)">
</datalist>