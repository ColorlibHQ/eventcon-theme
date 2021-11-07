<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'eventcon_preloader', 'eventcon_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'eventcon_header', 'eventcon_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'eventcon_footer', 'eventcon_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'eventcon_wrp_start', 'eventcon_wrp_start_cb', 10 );
	add_action( 'eventcon_wrp_end', 'eventcon_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'eventcon_blog_col_start', 'eventcon_blog_col_start_cb', 10 );
	add_action( 'eventcon_blog_col_end', 'eventcon_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'eventcon_blog_posts_thumb', 'eventcon_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'eventcon_blog_details_wrap_start', 'eventcon_blog_details_wrap_start_cb', 10 );
	add_action( 'eventcon_blog_details_wrap_end', 'eventcon_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'eventcon_blog_posts_title', 'eventcon_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'eventcon_blog_posts_meta', 'eventcon_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'eventcon_blog_posts_excerpt', 'eventcon_blog_posts_excerpt_cb', 10 );
	// add_action( 'eventcon_blog_posts_excerpt', 'eventcon_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'eventcon_blog_posts_info_link', 'eventcon_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'eventcon_blog_posts_content', 'eventcon_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'eventcon_blog_posts_share', 'eventcon_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'eventcon_blog_sidebar', 'eventcon_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'eventcon_blog_single_meta', 'eventcon_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'eventcon_page_content', 'eventcon_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'eventcon_fof', 'eventcon_fof_cb', 10 );

	

?>