<?php 
/**
 * @Packge     : Eventcon
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'eventcon_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'eventcon' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'eventcon_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Footer Menu Section
     */
    array(
        'id'   => 'eventcon_footer_menu_options_panel',
        'args' => array(
            'title'    => esc_html__( 'Footer Menus', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'eventcon_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 3,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'eventcon_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'eventcon_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'eventcon_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'eventcon_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 7,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'eventcon_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 8,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'eventcon_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'eventcon' ),
            'panel'    => 'eventcon_theme_options_panel',
            'priority' => 9,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>