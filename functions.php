<?php
/**
 * Architetto di Progetti — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'AM_THEME_VERSION', '2.0.0' );

/**
 * Portfolio identity and lightweight multilingual layer.
 *
 * The site intentionally avoids a translation plugin: all interface copy lives
 * in the theme and the selected language is carried in the `lang` query string.
 */
function am_project_name() {
	return 'Multilingual WordPress Landing Page';
}

function am_get_language() {
	$supported = array( 'es', 'en', 'fr' );
	$requested = isset( $_GET['lang'] ) ? sanitize_key( wp_unslash( $_GET['lang'] ) ) : 'es';

	return in_array( $requested, $supported, true ) ? $requested : 'es';
}

function am_translations() {
	return array(
		'es' => array(
			'skip' => 'Saltar al contenido', 'home' => 'Inicio', 'about' => 'Proyecto', 'services' => 'Capacidades', 'work' => 'Diseño', 'blog' => 'Contenido', 'contact' => 'Contacto',
			'cta' => 'Ver el proyecto', 'menu_open' => 'Abrir menú', 'menu_close' => 'Cerrar menú', 'nav' => 'Navegación principal',
			'footer_intro' => 'Una landing multilingüe desarrollada como tema WordPress personalizado, optimizada para accesibilidad y dispositivos móviles.',
			'newsletter' => 'Actualizaciones', 'newsletter_text' => 'Formulario demostrativo listo para conectarse con una plataforma de email marketing.', 'subscribe' => 'Suscribirme',
			'first_name' => 'Nombre', 'last_name' => 'Apellido', 'email' => 'Correo electrónico', 'phone' => 'Teléfono (opcional)', 'privacy' => 'Privacidad',
			'privacy_note' => 'Demo local: los datos del formulario se envían únicamente al administrador de esta instalación de WordPress.',
			'success' => 'Gracias. El formulario se procesó correctamente.', 'error' => 'Revisa los campos obligatorios e inténtalo de nuevo.', 'rights' => 'Proyecto de demostración para portafolio.',
		),
		'en' => array(
			'skip' => 'Skip to content', 'home' => 'Home', 'about' => 'Project', 'services' => 'Capabilities', 'work' => 'Design', 'blog' => 'Content', 'contact' => 'Contact',
			'cta' => 'View the project', 'menu_open' => 'Open menu', 'menu_close' => 'Close menu', 'nav' => 'Primary navigation',
			'footer_intro' => 'A multilingual landing page built as a custom WordPress theme, optimized for accessibility and mobile devices.',
			'newsletter' => 'Updates', 'newsletter_text' => 'A demonstration form ready to connect to an email marketing platform.', 'subscribe' => 'Subscribe',
			'first_name' => 'First name', 'last_name' => 'Last name', 'email' => 'Email address', 'phone' => 'Phone (optional)', 'privacy' => 'Privacy',
			'privacy_note' => 'Local demo: form data is sent only to the administrator of this WordPress installation.',
			'success' => 'Thank you. The form was processed successfully.', 'error' => 'Check the required fields and try again.', 'rights' => 'Portfolio demonstration project.',
		),
		'fr' => array(
			'skip' => 'Aller au contenu', 'home' => 'Accueil', 'about' => 'Projet', 'services' => 'Compétences', 'work' => 'Design', 'blog' => 'Contenu', 'contact' => 'Contact',
			'cta' => 'Voir le projet', 'menu_open' => 'Ouvrir le menu', 'menu_close' => 'Fermer le menu', 'nav' => 'Navigation principale',
			'footer_intro' => 'Une landing page multilingue développée comme thème WordPress sur mesure, optimisée pour l’accessibilité et les appareils mobiles.',
			'newsletter' => 'Actualités', 'newsletter_text' => 'Un formulaire de démonstration prêt à être connecté à une plateforme d’email marketing.', 'subscribe' => 'M’inscrire',
			'first_name' => 'Prénom', 'last_name' => 'Nom', 'email' => 'Adresse e-mail', 'phone' => 'Téléphone (facultatif)', 'privacy' => 'Confidentialité',
			'privacy_note' => 'Démo locale : les données du formulaire sont envoyées uniquement à l’administrateur de cette installation WordPress.',
			'success' => 'Merci. Le formulaire a été traité avec succès.', 'error' => 'Vérifiez les champs obligatoires et réessayez.', 'rights' => 'Projet de démonstration pour portfolio.',
		),
	);
}

function am_t( $key ) {
	$all  = am_translations();
	$lang = am_get_language();

	return isset( $all[ $lang ][ $key ] ) ? $all[ $lang ][ $key ] : $key;
}

function am_localized_url( $anchor = '' , $language = null ) {
	$lang = $language ? $language : am_get_language();
	$url  = add_query_arg( 'lang', $lang, home_url( '/' ) );

	return $anchor ? $url . '#' . ltrim( $anchor, '#' ) : $url;
}

function am_filter_site_name() {
	return am_project_name();
}
add_filter( 'pre_option_blogname', 'am_filter_site_name' );

function am_filter_site_description() {
	return 'Custom WordPress theme · Responsive · ES / EN / FR';
}
add_filter( 'pre_option_blogdescription', 'am_filter_site_description' );

function am_language_attributes( $output ) {
	return preg_replace( '/lang=("|\')[^"\']+("|\')/', 'lang="' . esc_attr( am_get_language() ) . '"', $output );
}
add_filter( 'language_attributes', 'am_language_attributes' );

function am_portfolio_meta() {
	$descriptions = array(
		'es' => 'Landing page multilingüe creada como tema WordPress personalizado con PHP, JavaScript y CSS responsive.',
		'en' => 'Multilingual landing page built as a custom WordPress theme with PHP, JavaScript and responsive CSS.',
		'fr' => 'Landing page multilingue créée comme thème WordPress sur mesure avec PHP, JavaScript et CSS responsive.',
	);
	$lang = am_get_language();
	?>
	<meta name="description" content="<?php echo esc_attr( $descriptions[ $lang ] ); ?>">
	<link rel="canonical" href="<?php echo esc_url( am_localized_url( '', $lang ) ); ?>">
	<?php foreach ( array( 'es', 'en', 'fr' ) as $code ) : ?>
		<link rel="alternate" hreflang="<?php echo esc_attr( $code ); ?>" href="<?php echo esc_url( am_localized_url( '', $code ) ); ?>">
	<?php endforeach; ?>
	<link rel="alternate" hreflang="x-default" href="<?php echo esc_url( am_localized_url( '', 'es' ) ); ?>">
	<?php
}
add_action( 'wp_head', 'am_portfolio_meta', 1 );

/* -------------------------------------------------
 * 1. SETUP DEL TEMA
 * ------------------------------------------------- */
function am_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 320,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => __( 'Menu Principale', 'architetto-progetti' ),
		'footer'  => __( 'Menu Footer', 'architetto-progetti' ),
	) );
}
add_action( 'after_setup_theme', 'am_theme_setup' );

/* -------------------------------------------------
 * 2. ESTILOS Y SCRIPTS
 * ------------------------------------------------- */
function am_enqueue_assets() {
	wp_enqueue_style( 'am-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap', array(), null );
	wp_enqueue_style( 'am-main', get_template_directory_uri() . '/assets/css/main.css', array(), AM_THEME_VERSION );
	wp_enqueue_script( 'am-main', get_template_directory_uri() . '/assets/js/main.js', array(), AM_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'am_enqueue_assets' );

/* -------------------------------------------------
 * 3. WIDGET AREAS (opcional, no usado en el diseño base)
 * ------------------------------------------------- */
function am_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Blog', 'architetto-progetti' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'am_widgets_init' );

/* -------------------------------------------------
 * 4. INCLUDES
 * ------------------------------------------------- */
require_once get_template_directory() . '/inc/cpt-testimonial.php';
require_once get_template_directory() . '/inc/newsletter-form.php';
require_once get_template_directory() . '/inc/customizer.php';

/* -------------------------------------------------
 * 5. HELPERS DE PLANTILLA
 * ------------------------------------------------- */

/**
 * Recorta un texto a N palabras (para los excerpt del blog).
 */
function am_excerpt( $length = 22 ) {
	echo wp_trim_words( get_the_excerpt(), $length, '…' );
}

/**
 * Tiempo de lectura estimado en minutos.
 */
function am_reading_time() {
	$content = get_post_field( 'post_content', get_the_ID() );
	$words   = str_word_count( wp_strip_all_tags( $content ) );
	$minutes = max( 1, ceil( $words / 200 ) );
	echo esc_html( $minutes ) . ' min';
}
