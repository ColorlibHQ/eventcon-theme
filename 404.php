<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

	//  Call Header
	get_header();

	/**
	 * 404 page
	 * @Hook eventcon_fof
	 * @Hooked eventcon_fof_cb
	 *
	 */

	do_action( 'eventcon_fof' );

	 // Call Footer
	 get_footer();
?>