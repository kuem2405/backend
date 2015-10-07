<?php
//add script and css
    function theme_name_scripts() {
        wp_enqueue_style( 'styleTheme', get_stylesheet_uri() );
        wp_enqueue_style( 'styleUI', 'http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css' );
        wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/theme_file/js/jquery-2.1.4.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'cslider', get_template_directory_uri() . '/theme_file/js/jquery.cslider.js', array(), '1.0.0', true );
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/theme_file/slick/slick.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'scriptMain', get_template_directory_uri() . '/theme_file/js/main.js', array(), '1.0.0', true );
        wp_enqueue_script( 'uiJquery', "https://code.jquery.com/ui/1.11.3/jquery-ui.min.js", array(), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

    add_theme_support("post-thumbnails");
    // Register datepicker ui for properties
    function admin_homes_for_sale_javascript(){
            wp_enqueue_script('jquery-ui-datepicker', 'https://code.jquery.com/ui/1.11.3/jquery-ui.min.js');  
    }
    add_action('admin_print_scripts', 'admin_homes_for_sale_javascript');

    // Register ui styles for properties
    function admin_homes_for_sale_styles(){
       wp_enqueue_style('jquery-ui', 'http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');  
    }
    add_action('admin_print_styles', 'admin_homes_for_sale_styles');
    // add custom field
    add_action( 'add_meta_boxes', 'cd_meta_box_add' );
    function cd_meta_box_add()
    {
        add_meta_box( 'option-post', 'Thông tin thêm', 'cd_meta_box_cb', 'post', 'normal', 'high' );
    }
    function cd_meta_box_cb()
    {
        global $post;
        $values = get_post_custom( $post->ID );
        $tel = isset( $values['phone'] ) ? esc_attr( $values['phone'][0] ) : '' ;
        $price = isset( $values['price'] ) ? esc_attr( $values['price'][0] ) : '' ;
        $link = isset( $values['link'] ) ? esc_attr( $values['link'][0] ) : '' ;
        $placeFrom = isset( $values['placeFrom'] ) ? esc_attr( $values['placeFrom'][0] ) : '' ;
        $placeTo = isset( $values['placeTo'] ) ? esc_attr( $values['placeTo'][0] ) : '' ;
        $dateGo = isset( $values['dateGo'] ) ? esc_attr( $values['dateGo'][0] ) : '' ;
        $airline = isset( $values['airline'] ) ? esc_attr( $values['airline'][0] ) : '' ;
        $flight = isset( $values['flight'] ) ? esc_attr( $values['flight'][0] ) : '' ;
        // We'll use this nonce field later on when saving.
        wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
        ?>
<script>jQuery(document).ready(function(){jQuery( "#dateGo" ).datepicker({ minDate: 0}); jQuery( "#ui-datepicker-div" ).hide();});</script>
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
        <table>
            <tr>
                <td><label for="telephone">Số điện thoại: </label></td>
                <td><input type="tel" name="phone" id="telephone" value="<?php echo $tel; ?>" /></td>
            </tr>
            <tr>
                <td><label for="link">Website link: </label></td>
                <td><input type="text" name="link" id="link" value="<?php echo $link; ?>" /></td>
            </tr>
            <tr>
                <td><label for="flight">Chuyến bay: </label></td>
                <td><input type="date" name="flight" id="flight" value="<?php echo $flight; ?>" /></td>
            </tr>
            <tr>
                <td><label for="placeFrom">Nơi đi: </label></td>
                <td><input type="text" name="placeFrom" id="placeFrom" list="add" value="<?php echo $placeFrom; ?>" /></td>
                
            </tr>
            <tr>
                <td><label for="placeTo">Nơi đến: </label></td>
                <td><input type="text" name="placeTo" id="placeTo" list="add" value="<?php echo $placeTo; ?>" /></td>
            </tr>
            <tr>
                <td><label for="airline">Hãng máy bay: </label></td>
                <td><input type="text" name="airline" id="airline" value="<?php echo $airline; ?>" /></td>
            </tr>
            <tr>
                <td><label for="price">Giá vé: </label></td>
                <td><input type="text" name="price" id="price" value="<?php echo $price; ?>" /></td>
            </tr>
            <tr>
                <td><label for="dateGo">Ngày bay: </label></td>
                <td><input type="date" name="dateGo" id="dateGo" value="<?php echo $dateGo; ?>" /></td>
            </tr>
        </table>
    <?php  
    }
    add_action( 'save_post', 'cd_meta_box_save' );
    function cd_meta_box_save( $post_id )
    {
        // Bail if we're doing an auto save
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

        // if our nonce isn't there, or we can't verify it, bail
        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

        // if our current user can't edit this post, bail
        if( !current_user_can( 'edit_post' ) ) return;

        // now we can actually save the data
        $allowed = array( 
        'a' => array( // on allow a tags
        'href' => array() // and those anchors can only have href attribute
        )
        );

        // Make sure your data is set before trying to save it
        if( isset( $_POST['phone'] ) )
        update_post_meta( $post_id, 'phone', wp_kses( $_POST['phone'], $allowed ) );
        if( isset( $_POST['price'] ) )
        update_post_meta( $post_id, 'price', wp_kses( $_POST['price'], $allowed ) );
        if(isset($_POST['link']))
        update_post_meta($post_id, 'link', wp_kses($_POST['link'], $allowed));
        if( isset( $_POST['placeFrom'] ) )
        update_post_meta( $post_id, 'placeFrom', wp_kses( $_POST['placeFrom'], $allowed ) );
        if(isset($_POST['placeTo']))
        update_post_meta($post_id, 'placeTo', wp_kses($_POST['placeTo'], $allowed));
        if(isset($_POST['dateGo']))
        update_post_meta($post_id, 'dateGo', wp_kses($_POST['dateGo'], $allowed));
        if(isset($_POST['airline']))
        update_post_meta($post_id, 'airline', wp_kses($_POST['airline'], $allowed));
        if(isset($_POST['flight']))
        update_post_meta($post_id, 'flight', wp_kses($_POST['flight'], $allowed));
    }

// Function Contact Form

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// register menu
register_nav_menus(array(
    'menu_top' => 'Menu top page',
    'menu_bottom' => 'Menu bottom page'
));
//excerpt display
function new_excerpt_lenght($lenght){
    return 45;
}
add_filter('excerpt_length','new_excerpt_lenght');
function new_excerpt_more($more){
    global $post;
    return '<div class="readMore"><a href="'.get_permalink($post->ID).'"><i class="fa fa-play"></i>Xem chi tiết</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// pagination
function numbered_pagination(){
    global $wp_query;
    $big = 99999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'show_all' => false,
        'end_size' => 2,
        'mid_size' => 3,
        'prev_next' => true,
        'prev_text' => '<i class="fa fa-angle-double-left"></i>',
        'next_text' => '<i class="fa fa-angle-double-right"></i>',
        'type' => 'list'
    ));
}


?>
