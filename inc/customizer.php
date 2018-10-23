<?php
/**
 * banco Theme Customizer.
 *
 * @package banco
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

//function banco_customize_register( $wp_customize ) {
//	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
//	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
//	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
//}
//add_action( 'customize_register', 'banco_customize_register' );


add_action('customize_register','mytheme_customizer_options');
function mytheme_customizer_options( $wp_customize ) {
    
    /* THEME MAIN COLORS */
    $wp_customize->add_setting( 
        'color_options', 
        array(
            'default' => 'navy_blue',
            'transport'   => 'postMessage',
        )
    );
    
    $wp_customize->add_control(
        'color_options',
        array(
            'type' => 'radio',
            'label' => 'Theme Color',
            'section' => 'colors',
            'settings'=> 'color_options',
            'choices' => array(
                'navy_blue' => 'Navy Blue',
                'teal'  => 'Teal',
                'green' => 'Green',
                'red'   => 'Red',
                'orange'=> 'Orange',
            ),
        )
    );
    
    /* Menus */
    $wp_customize->add_setting( 'top_menu_text_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_text_color', array(
        'label'      => 'Top Menu Text Color',
        'section'    => 'colors',
        'settings'   => 'top_menu_text_color',
    ) ) );
    
    $wp_customize->add_setting( 'top_menu_text_hover_color' , array(
        'default'     => '#8bc53f',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_text_hover_color', array(
        'label'      => 'Top Menu HOVER Text Color',
        'section'    => 'colors',
        'settings'   => 'top_menu_text_hover_color',
    ) ) );
    
    $wp_customize->add_setting( 'top_menu_text_active_color' , array(
        'default'     => '#8bc53f',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_text_active_color', array(
        'label'      => 'Top Menu ACTIVE Text Color',
        'section'    => 'colors',
        'settings'   => 'top_menu_text_active_color',
    ) ) ); 
    /* --end menu-- */
    
    /* Buttons */
    $wp_customize->add_setting( 'button_bg_color' , array(
        'default'     => '#8bc53f',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_bg_color', array(
        'label'      => 'Button Background Color',
        'section'    => 'colors',
        'settings'   => 'button_bg_color',
    ) ) );
    
    $wp_customize->add_setting( 'button_text_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_color', array(
        'label'      => 'Button Text Color',
        'section'    => 'colors',
        'settings'   => 'button_text_color',
    ) ) );
    
    /* Footer */
    $wp_customize->add_setting( 'footer_bg_color' , array(
        'default'     => '#212121',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
        'label'      => 'Footer Background Color',
        'section'    => 'colors',
        'settings'   => 'footer_bg_color',
    ) ) );
    
    $wp_customize->add_setting( 'footer_menu_text_color' , array(
        'default'     => '#8bc53f',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_text_color', array(
        'label'      => 'Footer Menu Text Color',
        'section'    => 'colors',
        'settings'   => 'footer_menu_text_color',
    ) ) );
    
    $wp_customize->add_setting( 'footer_menu_text_hover_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_text_hover_color', array(
        'label'      => 'Footer Menu HOVER Text Color',
        'section'    => 'colors',
        'settings'   => 'footer_menu_text_hover_color',
    ) ) );
    
    $wp_customize->add_setting( 'footer_menu_text_active_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_text_active_color', array(
        'label'      => 'Footer Menu ACTIVE Text Color',
        'section'    => 'colors',
        'settings'   => 'footer_menu_text_active_color',
    ) ) );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function banco_customize_preview_js() {
	wp_enqueue_script( 'banco_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20181023', true );
}
add_action( 'customize_preview_init', 'banco_customize_preview_js' );


add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css() {
    get_template_part('inc/customized_css');
}

function ii_admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'ii_admin_style');