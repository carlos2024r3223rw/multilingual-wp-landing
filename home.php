<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main>
	<section class="page-hero">
		<div class="container">
			<span class="eyebrow">Blog</span>
			<h1>Risorse per crescere</h1>
			<p class="section-lead" style="margin-top:0.75rem;">Articoli su automazioni etiche, crescita sostenibile e temi di attualità.</p>
		</div>
	</section>

	<div class="container section" style="padding-top:2.5rem;">
		<?php if ( have_posts() ) : ?>
			<div class="blog-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<a class="blog-card" href="<?php the_permalink(); ?>">
						<div class="blog-card__meta">
							<?php $cats = get_the_category(); ?>
							<span class="blog-card__tag"><?php echo $cats ? esc_html( $cats[0]->name ) : 'Blog'; ?></span>
							<span class="blog-card__time"><?php am_reading_time(); ?></span>
						</div>
						<h3><?php the_title(); ?></h3>
						<p><?php am_excerpt( 20 ); ?></p>
						<div class="blog-card__footer">
							<span><?php echo esc_html( get_the_date() ); ?></span>
							<span class="blog-card__read">Leggi →</span>
						</div>
					</a>
				<?php endwhile; ?>
			</div>
			<div style="margin-top:2.5rem; display:flex; justify-content:center; gap:1rem;">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<p>Nessun articolo pubblicato ancora.</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
