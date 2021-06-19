<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Travel Master
 * @since Travel Master 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'travel_master_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','travel-master' ),
	'description'       => esc_html__( 'Archive section options.', 'travel-master' ),
	'panel'             => 'travel_master_theme_options_panel',
) );




$wp_customize->add_setting( 'recipe_hero', array(
        'default' => get_theme_file_uri('assets/uploads/header-image.jpg'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw',
    ));
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'recipe_hero', array(
        'label' => 'Upload Recipe Hero Image',
        'priority' => 20,
        'section' => 'travel_master_archive_section',
        'settings' => 'recipe_hero',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Image',
                    'remove' => 'Remove Image',
                    'change' => 'Change Image',
                    )
    )));


$wp_customize->add_setting( 'blog_hero', array(
        'default' => get_theme_file_uri('assets/uploads/header-image.jpg'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw',
    ));
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'blog_hero', array(
        'label' => 'Upload Blog Hero Image',
        'priority' => 21,
        'section' => 'travel_master_archive_section',
        'settings' => 'blog_hero',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Image',
                    'remove' => 'Remove Image',
                    'change' => 'Change Image',
                    )
    )));





// Your latest posts title setting and control.
$wp_customize->add_setting( 'travel_master_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'travel_master_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'travel-master' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'travel-master' ),
	'section'           => 'travel_master_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'travel_master_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'travel_master_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'travel_master_sanitize_switch_control',
) );

$wp_customize->add_control( new Travel_Master_Switch_Control( $wp_customize, 'travel_master_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'travel-master' ),
	'section'           => 'travel_master_archive_section',
	'on_off_label' 		=> travel_master_hide_options(),
) ) );

// Archive category setting and control.
$wp_customize->add_setting( 'travel_master_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'travel_master_sanitize_switch_control',
) );

$wp_customize->add_control( new Travel_Master_Switch_Control( $wp_customize, 'travel_master_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'travel-master' ),
	'section'           => 'travel_master_archive_section',
	'on_off_label' 		=> travel_master_hide_options(),
) ) );

// Archive category setting and control.
$wp_customize->add_setting( 'travel_master_theme_options[hide_author]', array(
	'default'           => $options['hide_author'],
	'sanitize_callback' => 'travel_master_sanitize_switch_control',
) );

$wp_customize->add_control( new Travel_Master_Switch_Control( $wp_customize, 'travel_master_theme_options[hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'travel-master' ),
	'section'           => 'travel_master_archive_section',
	'on_off_label' 		=> travel_master_hide_options(),
) ) );

