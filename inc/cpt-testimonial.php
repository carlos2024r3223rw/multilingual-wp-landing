<?php
/**
 * Custom Post Type: Testimonianze
 * Título del post = Nombre de la persona
 * Contenido/Extracto = cita del testimonio
 * Imagen destacada = foto de la persona
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function am_register_testimonial_cpt() {
	register_post_type( 'testimonianza', array(
		'labels' => array(
			'name'          => __( 'Testimonianze', 'architetto-progetti' ),
			'singular_name' => __( 'Testimonianza', 'architetto-progetti' ),
			'add_new_item'  => __( 'Aggiungi Testimonianza', 'architetto-progetti' ),
			'edit_item'     => __( 'Modifica Testimonianza', 'architetto-progetti' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-format-quote',
		'supports'     => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'  => false,
	) );
}
add_action( 'init', 'am_register_testimonial_cpt' );

/* Meta box: ruolo/azienda, URL LinkedIn, numero di stelle */
function am_testimonial_metabox() {
	add_meta_box( 'am_testimonial_details', __( 'Dettagli Testimonianza', 'architetto-progetti' ), 'am_testimonial_metabox_html', 'testimonianza', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'am_testimonial_metabox' );

function am_testimonial_metabox_html( $post ) {
	wp_nonce_field( 'am_save_testimonial', 'am_testimonial_nonce' );
	$role     = get_post_meta( $post->ID, '_am_role_company', true );
	$linkedin = get_post_meta( $post->ID, '_am_linkedin_url', true );
	$stars    = get_post_meta( $post->ID, '_am_stars', true );
	if ( '' === $stars ) $stars = 5;
	?>
	<p>
		<label for="am_role_company"><strong><?php _e( 'Ruolo / Azienda', 'architetto-progetti' ); ?></strong></label><br>
		<input type="text" id="am_role_company" name="am_role_company" value="<?php echo esc_attr( $role ); ?>" class="widefat" placeholder="Founder – Nome Azienda" />
	</p>
	<p>
		<label for="am_linkedin_url"><strong><?php _e( 'URL profilo LinkedIn', 'architetto-progetti' ); ?></strong></label><br>
		<input type="url" id="am_linkedin_url" name="am_linkedin_url" value="<?php echo esc_attr( $linkedin ); ?>" class="widefat" placeholder="https://www.linkedin.com/in/..." />
	</p>
	<p>
		<label for="am_stars"><strong><?php _e( 'Stelle (1-5)', 'architetto-progetti' ); ?></strong></label><br>
		<input type="number" id="am_stars" name="am_stars" min="1" max="5" value="<?php echo esc_attr( $stars ); ?>" />
	</p>
	<?php
}

function am_save_testimonial_meta( $post_id ) {
	if ( ! isset( $_POST['am_testimonial_nonce'] ) || ! wp_verify_nonce( $_POST['am_testimonial_nonce'], 'am_save_testimonial' ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['am_role_company'] ) ) {
		update_post_meta( $post_id, '_am_role_company', sanitize_text_field( $_POST['am_role_company'] ) );
	}
	if ( isset( $_POST['am_linkedin_url'] ) ) {
		update_post_meta( $post_id, '_am_linkedin_url', esc_url_raw( $_POST['am_linkedin_url'] ) );
	}
	if ( isset( $_POST['am_stars'] ) ) {
		update_post_meta( $post_id, '_am_stars', intval( $_POST['am_stars'] ) );
	}
}
add_action( 'save_post_testimonianza', 'am_save_testimonial_meta' );
