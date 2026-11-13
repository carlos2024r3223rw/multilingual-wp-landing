<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
while ( have_posts() ) : the_post();
	$cats = get_the_category();
	?>
	<main>
		<section class="page-hero">
			<div class="container" style="max-width:46rem;">
				<?php if ( $cats ) : ?><span class="blog-card__tag"><?php echo esc_html( $cats[0]->name ); ?></span><?php endif; ?>
				<h1 style="margin-top:0.75rem;"><?php the_title(); ?></h1>
				<div class="post-meta">
					<span><?php echo esc_html( get_the_date() ); ?></span>
					<span><?php am_reading_time(); ?></span>
				</div>
			</div>
		</section>

		<div class="container">
			<article class="single-content">
				<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'large' ); ?>
				<?php the_content(); ?>
			</article>
		</div>

		<section class="section section--dark cta-section">
			<div class="container">
				<h2>Vuoi applicare questi principi alla tua realtà?</h2>
				<p>Prenota una chiamata gratuita e vediamo insieme come crescere in modo sostenibile.</p>
				<div class="cta-section__actions">
					<a href="<?php echo esc_url( get_theme_mod( 'am_booking_url', '#' ) ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Prenota Chiamata</a>
				</div>
			</div>
		</section>
	</main>
	<?php
endwhile;
get_footer();
