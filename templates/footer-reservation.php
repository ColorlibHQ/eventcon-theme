<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Eventcon
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$eventcon_reservation_title     = !empty( eventcon_opt( 'eventcon_reservation_title' ) ) ? eventcon_opt( 'eventcon_reservation_title' ) : '';
	$eventcon_reservation_sub_title = !empty( eventcon_opt( 'eventcon_reservation_sub_title' ) ) ? eventcon_opt( 'eventcon_reservation_sub_title' ) : '';
	$eventcon_reservation_btn_text  = !empty( eventcon_opt( 'eventcon_reservation_btn_text' ) ) ? eventcon_opt( 'eventcon_reservation_btn_text' ) : '';
	$eventcon_reservation_btn_url	  = !empty( eventcon_opt( 'eventcon_reservation_btn_url' ) ) ? eventcon_opt( 'eventcon_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $eventcon_reservation_title )?></h3>
			<p><?php echo esc_html( $eventcon_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $eventcon_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $eventcon_reservation_btn_text )?></a>
		</div>
	</div>