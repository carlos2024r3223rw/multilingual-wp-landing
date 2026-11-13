<?php
/**
 * Procesa el formulario de newsletter del footer sin necesidad de plugins.
 * Envía un email de notificación al administrador.
 * Para conectarlo a Mailchimp/Brevo/etc. sustituye am_handle_newsletter_signup()
 * por una llamada a la API del proveedor que uses.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function am_handle_newsletter_signup() {
	if ( ! isset( $_POST['am_newsletter_nonce'] ) || ! wp_verify_nonce( $_POST['am_newsletter_nonce'], 'am_newsletter_signup' ) ) {
		wp_die( __( 'Richiesta non valida.', 'architetto-progetti' ) );
	}

	$nome     = isset( $_POST['nome'] ) ? sanitize_text_field( wp_unslash( $_POST['nome'] ) ) : '';
	$cognome  = isset( $_POST['cognome'] ) ? sanitize_text_field( wp_unslash( $_POST['cognome'] ) ) : '';
	$email    = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$telefono = isset( $_POST['telefono'] ) ? sanitize_text_field( wp_unslash( $_POST['telefono'] ) ) : '';
	$lingua   = isset( $_POST['lingua'] ) ? sanitize_key( wp_unslash( $_POST['lingua'] ) ) : 'es';

	$redirect_url = wp_get_referer() ? wp_get_referer() : home_url( '/' );

	if ( empty( $nome ) || empty( $email ) || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'newsletter', 'error', $redirect_url ) . '#newsletter' );
		exit;
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( '[%s] Nuova iscrizione newsletter', get_bloginfo( 'name' ) );
	$body    = "Nome: $nome $cognome\nEmail: $email\nTelefono: $telefono\nLingua: $lingua";
	$sent = wp_mail( $to, $subject, $body );

	// Opcional: guarda también como entrada en un Custom Post Type "iscritti"
	// para tener el listado dentro de wp-admin, o intégralo con tu ESP favorito aquí.

	wp_safe_redirect( add_query_arg( 'newsletter', $sent ? 'success' : 'error', $redirect_url ) . '#newsletter' );
	exit;
}
add_action( 'admin_post_am_newsletter_signup', 'am_handle_newsletter_signup' );
add_action( 'admin_post_nopriv_am_newsletter_signup', 'am_handle_newsletter_signup' );
