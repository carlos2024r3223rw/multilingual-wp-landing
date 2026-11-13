<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function am_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'am_general', array(
		'title'    => __( 'Impostazioni Generali', 'architetto-progetti' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'am_booking_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'am_booking_url', array(
		'label'   => __( 'URL "Prenota Chiamata" (es. Calendly, Lark, ecc.)', 'architetto-progetti' ),
		'section' => 'am_general',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'am_linkedin_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'am_linkedin_url', array(
		'label'   => __( 'URL profilo LinkedIn', 'architetto-progetti' ),
		'section' => 'am_general',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'am_hero_text', array(
		'default'           => "Aiuto startup, PMI e no profit a scalare eticamente, risparmiando tempo, denaro e risorse.",
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'am_hero_text', array(
		'label'   => __( 'Testo descrittivo Hero (home page)', 'architetto-progetti' ),
		'section' => 'am_general',
		'type'    => 'textarea',
	) );
}
add_action( 'customize_register', 'am_customize_register' );
