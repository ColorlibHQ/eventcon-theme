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

	$footer_text = 'finloan@support.com <br> +10 873 672 6782 <br> 600/D, Green road, NewYork';
	$footer_text = eventcon_opt( 'eventcon_footer_text' ) == '' ? $footer_text : eventcon_opt( 'eventcon_footer_text' );
	
	?>
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-6 col-lg-3">
					<div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
						<?php
							echo '
							<div class="footer_logo">
								'.eventcon_theme_footer_logo().'
							</div>
							';

							if ( $footer_text ) {
								echo '<p>'.wp_kses_post(nl2br( $footer_text )).'</p>';
							}

							// Social profiles
							$social_opt = eventcon_opt('eventcon_social_profile_toggle');
							if ( $social_opt == true ) {
								$social_items = eventcon_opt('eventcon_social_profiles');
								if( is_array( $social_items ) && count( $social_items ) > 0 ){
									echo '<div class="socail_links"><ul>';
										foreach ($social_items as $value) {
											echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
										}
									echo '</ul></div>';
								}          
							}  
						?>

					</div>
				</div>

				<?php
					// Footer widget 2
					if( is_active_sidebar( 'footer-2' ) ){
						dynamic_sidebar( 'footer-2' );
					}

					// Footer widget 3
					if( is_active_sidebar( 'footer-3' ) ){
						dynamic_sidebar( 'footer-3' );
					}

					// Footer widget 4
					if( is_active_sidebar( 'footer-4' ) ){
						dynamic_sidebar( 'footer-4' );
					}
				?>
			</div>
		</div>
	</div>