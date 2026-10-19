<?php
/**
 * LSIT Agency theme functions.
 *
 * @package LSIT_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LSIT_VERSION', '1.0.0' );

function lsit_setup() {
	load_theme_textdomain( 'lsit-agency', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 96, 'width' => 300, 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'lsit-agency' ),
			'footer'  => __( 'Footer Menu', 'lsit-agency' ),
		)
	);
}
add_action( 'after_setup_theme', 'lsit_setup' );

function lsit_assets() {
	wp_enqueue_style( 'lsit-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&family=Noto+Sans+Bengali:wght@400;600&display=swap', array(), null );
	wp_enqueue_style( 'lsit-style', get_stylesheet_uri(), array(), LSIT_VERSION );
	wp_enqueue_script( 'lsit-main', get_template_directory_uri() . '/assets/js/main.js', array(), LSIT_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'lsit_assets' );

/**
 * Customizer: editable homepage text (Appearance → Customize → Homepage).
 */
function lsit_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'lsit_home', array( 'title' => __( 'Homepage', 'lsit-agency' ), 'priority' => 30 ) );

	$fields = array(
		'hero_title'    => array( __( 'Hero title', 'lsit-agency' ), 'Grow Your Business With Digital Power', 'text' ),
		'hero_text'     => array( __( 'Hero text', 'lsit-agency' ), 'We help brands grow with digital marketing, web development and creative design that delivers real results.', 'textarea' ),
		'hero_btn_text' => array( __( 'Hero button text', 'lsit-agency' ), 'Get Started', 'text' ),
		'hero_btn_url'  => array( __( 'Hero button URL', 'lsit-agency' ), '#contact', 'url' ),
		'contact_email' => array( __( 'Contact email', 'lsit-agency' ), 'info@lsitagency.com', 'email' ),
		'contact_phone' => array( __( 'Contact phone / WhatsApp', 'lsit-agency' ), '', 'text' ),
		'facebook_url'  => array( __( 'Facebook URL', 'lsit-agency' ), '', 'url' ),
	);

	foreach ( $fields as $id => $field ) {
		list( $label, $default, $type ) = $field;
		$sanitize = 'sanitize_text_field';
		if ( 'textarea' === $type ) {
			$sanitize = 'sanitize_textarea_field';
		} elseif ( 'url' === $type ) {
			$sanitize = 'esc_url_raw';
		} elseif ( 'email' === $type ) {
			$sanitize = 'sanitize_email';
		}
		$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => $sanitize ) );
		$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'lsit_home', 'type' => $type ) );
	}
}
add_action( 'customize_register', 'lsit_customize_register' );

/**
 * Fallback menu when no menu is assigned.
 */
function lsit_fallback_menu() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'lsit-agency' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'lsit-agency' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About', 'lsit-agency' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'lsit-agency' ) . '</a></li>';
	echo '</ul>';
}
