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


?>

	<div id="f0f">
		<div class="container">
			<div class="row">
				<div class="f0f-content text-center col-md-12">
					<div class="fof-content-before">
						<?php 
							$errorText = esc_html__( 'Ooops 404 Error !', 'eventcon' );
							if( eventcon_opt( 'eventcon_fof_titleone' ) ){
								$errorText = eventcon_opt( 'eventcon_fof_titleone' );
							}
							
							echo '<h1 class="h1">'.esc_html( $errorText ).'</h1>';

							// Wrong text block
							$wrongText = wp_kses_post( __( 'Either something went wrong or the page dosen&rsquo;t exist anymore.', 'eventcon' ) );

							if( eventcon_opt('eventcon_fof_titletwo') ){
								$wrongText = eventcon_opt('eventcon_fof_titletwo');
							}

							$anchor = eventcon_anchor_tag(
								array(
									'url' 	 => esc_url( site_url( '/' ) ),
									'text' 	 => esc_html__( 'Go To Home page', 'eventcon' ),
									'class'	 => 'button-contactForm btn_1 boxed-btn'
								)
							);

							echo eventcon_paragraph_tag(
								array(
									'text' 	 => esc_html( $wrongText )
								)
							);

							echo wp_kses_post( $anchor );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>