<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main>
	<section class="page-hero">
		<div class="container">
			<span class="eyebrow"><?php bloginfo( 'name' ); ?></span>
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<div class="container">
		<article class="single-content">
			<?php
			while ( have_posts() ) : the_post();
				if ( has_post_thumbnail() ) the_post_thumbnail( 'large' );
				the_content();
			endwhile;
			?>
		</article>
	</div>
</main>
<?php get_footer(); ?>
