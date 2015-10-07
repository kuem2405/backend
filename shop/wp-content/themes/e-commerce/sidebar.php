<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package E-Commerce
 */
?>

<div id="secondary" class="widget-area" role="complementary">
<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?> 
    
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'e-commerce' ) ); ?>"><?php printf( esc_html__( 'Runs on %s', 'e-commerce' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'e-commerce' ), 'E-Commerce', '<a href="http://catchthemes.com/themes/e-commerce/">Catch Themes</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->       
</div><!-- #secondary -->