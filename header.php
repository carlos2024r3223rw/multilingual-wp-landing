<?php
/**
 * Accessible one-page navigation for the portfolio demo.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$navigation = array(
	'home'     => '',
	'about'    => 'project',
	'services' => 'capabilities',
	'work'     => 'design',
	'blog'     => 'content',
	'contact'  => 'contact',
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content"><?php echo esc_html( am_t( 'skip' ) ); ?></a>

<header class="site-header">
	<div class="container site-header__inner">
		<a href="<?php echo esc_url( am_localized_url() ); ?>" class="site-logo" aria-label="<?php echo esc_attr( am_project_name() ); ?>">
			<span class="site-logo__mark" aria-hidden="true">W</span>
			<span class="site-logo__text">WP Landing</span>
		</a>

		<nav class="primary-nav" aria-label="<?php echo esc_attr( am_t( 'nav' ) ); ?>">
			<ul>
				<?php foreach ( $navigation as $label => $anchor ) : ?>
					<li><a href="<?php echo esc_url( am_localized_url( $anchor ) ); ?>"><?php echo esc_html( am_t( $label ) ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>

		<div class="header-actions">
			<nav class="language-switcher language-switcher--desktop" aria-label="Language selector">
				<?php foreach ( array( 'es' => 'ES', 'en' => 'EN', 'fr' => 'FR' ) as $code => $label ) : ?>
					<a href="<?php echo esc_url( am_localized_url( '', $code ) ); ?>" lang="<?php echo esc_attr( $code ); ?>" <?php echo am_get_language() === $code ? 'aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
				<?php endforeach; ?>
			</nav>
			<a href="<?php echo esc_url( am_localized_url( 'project' ) ); ?>" class="btn btn-primary header-cta-desktop"><?php echo esc_html( am_t( 'cta' ) ); ?></a>
			<button type="button" class="mobile-menu-toggle" aria-label="<?php echo esc_attr( am_t( 'menu_open' ) ); ?>" data-open-label="<?php echo esc_attr( am_t( 'menu_open' ) ); ?>" data-close-label="<?php echo esc_attr( am_t( 'menu_close' ) ); ?>" aria-expanded="false" aria-controls="mobile-navigation">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 5h16M4 12h16M4 19h16"/></svg>
			</button>
		</div>
	</div>

	<nav class="mobile-nav" id="mobile-navigation" aria-label="<?php echo esc_attr( am_t( 'nav' ) ); ?>">
		<div class="mobile-nav__inner">
			<?php foreach ( $navigation as $label => $anchor ) : ?>
				<a href="<?php echo esc_url( am_localized_url( $anchor ) ); ?>"><?php echo esc_html( am_t( $label ) ); ?></a>
			<?php endforeach; ?>
			<div class="language-switcher">
				<?php foreach ( array( 'es' => 'Español', 'en' => 'English', 'fr' => 'Français' ) as $code => $label ) : ?>
					<a href="<?php echo esc_url( am_localized_url( '', $code ) ); ?>" lang="<?php echo esc_attr( $code ); ?>" <?php echo am_get_language() === $code ? 'aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</nav>
</header>
