<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container section">
	<?php if ( have_posts() ) : ?>
		<div class="blog-grid">
			<?php while ( have_posts() ) : the_post(); ?>
				<a class="blog-card" href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<p><?php am_excerpt( 20 ); ?></p>
				</a>
			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<p>Nessun contenuto trovato.</p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
