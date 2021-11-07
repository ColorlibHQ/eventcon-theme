<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Eventcon
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */



?>
<div class="col-sm-12">
	<div id="page_<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php 

		/**
		 * page content 
		 * Comments Template
		 * @Hook  eventcon_page_content
		 *
		 * @Hooked eventcon_page_content_cb
		 * 
		 *
		 */
		do_action( 'eventcon_page_content' );

		?>
	</div>
</div>