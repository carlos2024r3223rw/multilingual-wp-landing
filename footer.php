<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
	<footer class="site-footer">
		<div class="container footer-grid footer-grid--portfolio">
			<div class="footer-intro">
				<a href="<?php echo esc_url( am_localized_url() ); ?>" class="footer-brand"><span class="site-logo__mark" aria-hidden="true">W</span> WP Landing</a>
				<p><?php echo esc_html( am_t( 'footer_intro' ) ); ?></p>
				<nav class="language-switcher language-switcher--footer" aria-label="Language selector">
					<?php foreach ( array( 'es' => 'Español', 'en' => 'English', 'fr' => 'Français' ) as $code => $label ) : ?>
						<a href="<?php echo esc_url( am_localized_url( '', $code ) ); ?>" lang="<?php echo esc_attr( $code ); ?>" <?php echo am_get_language() === $code ? 'aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
					<?php endforeach; ?>
				</nav>
			</div>

			<div>
				<h3><?php echo esc_html( am_t( 'nav' ) ); ?></h3>
				<div class="footer-links footer-links--single">
					<a href="#project"><?php echo esc_html( am_t( 'about' ) ); ?></a>
					<a href="#capabilities"><?php echo esc_html( am_t( 'services' ) ); ?></a>
					<a href="#design"><?php echo esc_html( am_t( 'work' ) ); ?></a>
					<a href="#content"><?php echo esc_html( am_t( 'blog' ) ); ?></a>
				</div>
			</div>

			<div class="footer-newsletter">
				<h3><?php echo esc_html( am_t( 'newsletter' ) ); ?></h3>
				<p><?php echo esc_html( am_t( 'newsletter_text' ) ); ?></p>

				<?php if ( isset( $_GET['newsletter'] ) ) : ?>
					<p class="form-notice <?php echo 'success' === $_GET['newsletter'] ? 'form-notice--ok' : 'form-notice--err'; ?>" role="status"><?php echo esc_html( 'success' === $_GET['newsletter'] ? am_t( 'success' ) : am_t( 'error' ) ); ?></p>
				<?php endif; ?>

				<form class="newsletter-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" id="newsletter">
					<input type="hidden" name="action" value="am_newsletter_signup">
					<input type="hidden" name="lingua" value="<?php echo esc_attr( am_get_language() ); ?>">
					<?php wp_nonce_field( 'am_newsletter_signup', 'am_newsletter_nonce' ); ?>
					<div class="row-2">
						<label><span class="screen-reader-text"><?php echo esc_html( am_t( 'first_name' ) ); ?></span><input type="text" name="nome" autocomplete="given-name" required placeholder="<?php echo esc_attr( am_t( 'first_name' ) ); ?>"></label>
						<label><span class="screen-reader-text"><?php echo esc_html( am_t( 'last_name' ) ); ?></span><input type="text" name="cognome" autocomplete="family-name" placeholder="<?php echo esc_attr( am_t( 'last_name' ) ); ?>"></label>
					</div>
					<div class="row-2">
						<label><span class="screen-reader-text"><?php echo esc_html( am_t( 'email' ) ); ?></span><input type="email" name="email" autocomplete="email" required placeholder="<?php echo esc_attr( am_t( 'email' ) ); ?>"></label>
						<label><span class="screen-reader-text"><?php echo esc_html( am_t( 'phone' ) ); ?></span><input type="tel" name="telefono" autocomplete="tel" placeholder="<?php echo esc_attr( am_t( 'phone' ) ); ?>"></label>
					</div>
					<button type="submit"><?php echo esc_html( am_t( 'subscribe' ) ); ?></button>
					<details class="privacy-note" id="privacy"><summary><?php echo esc_html( am_t( 'privacy' ) ); ?></summary><p><?php echo esc_html( am_t( 'privacy_note' ) ); ?></p></details>
				</form>
			</div>
		</div>

		<div class="footer-bottom"><div class="container footer-bottom__inner"><p>© <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( am_project_name() ); ?></p><p><?php echo esc_html( am_t( 'rights' ) ); ?></p></div></div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
