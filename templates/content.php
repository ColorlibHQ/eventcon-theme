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

// Post Item Start

?>

<article id="<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>
	<?php 
	/**
	 * Blog Post thumbnail
	 * @Hook  eventcon_blog_posts_thumb
	 *
	 * @Hooked eventcon_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'eventcon_blog_posts_thumb' );

	/**
	 * 
	 * Blog details wrapper start hook function.
	 * column end.
	 *
	 * Hook eventcon_blog_details_wrap_start
	 *
	 * @Hooked eventcon_blog_details_wrap_start_cb
	 *  
	 */
	do_action( 'eventcon_blog_details_wrap_start' );
	
	/**
	 * Blog Post Meta
	 * @Hook  eventcon_blog_posts_meta
	 *
	 * @Hooked eventcon_blog_posts_meta_cb
	 * 
	 *
	 */
	// do_action( 'eventcon_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  eventcon_blog_posts_title
	 *
	 * @Hooked eventcon_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'eventcon_blog_posts_title' );		
	
	/**
	 * Blog Excerpt With read more button
	 * @Hook  eventcon_blog_posts_excerpt
	 *
	 * @Hooked eventcon_blog_posts_excerpt_cb
	 * @Hooked eventcon_blog_read_more_cb
	 * 
	 *
	 */
	do_action( 'eventcon_blog_posts_excerpt' );
	
	/**
	 * Blog posts info links hook function.
	 * @Hook  eventcon_blog_posts_info_link
	 *
	 * @Hooked eventcon_blog_posts_info_link_cb
	 * 
	 *
	 */
	do_action( 'eventcon_blog_posts_info_link' );

	/**
	 * 
	 * Blog details wrapper end hook function.
	 * column end.
	 *
	 * Hook eventcon_blog_details_wrap_end
	 *
	 * @Hooked eventcon_blog_details_wrap_end_cb
	 *  
	 */
	do_action( 'eventcon_blog_details_wrap_end' );
	
	?>
</article>