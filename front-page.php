<?php
/**
 * Multilingual portfolio landing page.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$copy = array(
	'es' => array(
		'eyebrow' => 'Proyecto de portafolio · Tema WordPress personalizado',
		'title' => 'Una landing multilingüe pensada para convertir.',
		'lead' => 'Una experiencia editorial clara, rápida y accesible creada desde cero con PHP, JavaScript y CSS. Sin constructores visuales ni dependencias innecesarias.',
		'primary' => 'Explorar el proyecto', 'secondary' => 'Ver capacidades',
		'proof' => 'Construido con',
		'project_kicker' => 'El proyecto', 'project_title' => 'Diseño con intención, código con criterio.',
		'project_text' => 'Esta demostración transforma una plantilla inicial en una pieza lista para portafolio: identidad coherente, arquitectura de una sola página, contenido en tres idiomas y una experiencia móvil cuidada.',
		'stat_one' => 'Idiomas', 'stat_two' => 'Plugins necesarios', 'stat_three' => 'Tema a medida',
		'cap_kicker' => 'Capacidades', 'cap_title' => 'Una base profesional y fácil de ampliar', 'cap_lead' => 'Cada decisión busca equilibrio entre presentación, rendimiento y mantenimiento.',
		'cards' => array(
			array( '01', 'WordPress a medida', 'Plantillas PHP, contenido dinámico y componentes reutilizables sin depender de un constructor visual.' ),
			array( '02', 'Responsive real', 'Jerarquía, navegación y rejillas adaptadas para móvil, tablet y escritorio.' ),
			array( '03', 'Experiencia multilingüe', 'Español, inglés y francés con URLs localizadas, etiquetas hreflang y navegación persistente.' ),
		),
		'design_kicker' => 'Sistema visual', 'design_title' => 'Editorial, contemporáneo y funcional.',
		'design_text' => 'Tipografía expresiva, contraste accesible, ritmo generoso y una paleta verde profundo crean una identidad sobria sin perder personalidad.',
		'features' => array( 'Navegación por anclas sin enlaces rotos', 'Estados de foco visibles y controles accesibles', 'Imágenes responsivas con carga diferida', 'SEO técnico básico integrado en el tema' ),
		'content_kicker' => 'Contenido dinámico', 'content_title' => 'WordPress sigue siendo el editor.', 'content_lead' => 'Las entradas publicadas se integran automáticamente en la portada.', 'read' => 'Leer artículo',
		'cta_title' => 'Una base sólida para el siguiente proyecto.', 'cta_text' => 'El tema está preparado para conectar formularios, analítica, un CMS multilingüe avanzado o una demo pública.', 'cta_button' => 'Revisar la solución',
	),
	'en' => array(
		'eyebrow' => 'Portfolio project · Custom WordPress theme',
		'title' => 'A multilingual landing page built to convert.',
		'lead' => 'A clear, fast and accessible editorial experience built from scratch with PHP, JavaScript and CSS. No visual builders or unnecessary dependencies.',
		'primary' => 'Explore the project', 'secondary' => 'View capabilities',
		'proof' => 'Built with',
		'project_kicker' => 'The project', 'project_title' => 'Intentional design, thoughtful code.',
		'project_text' => 'This demonstration turns an initial template into a portfolio-ready piece: a coherent identity, one-page architecture, content in three languages and a polished mobile experience.',
		'stat_one' => 'Languages', 'stat_two' => 'Required plugins', 'stat_three' => 'Custom theme',
		'cap_kicker' => 'Capabilities', 'cap_title' => 'A professional foundation that is easy to extend', 'cap_lead' => 'Every decision balances presentation, performance and maintainability.',
		'cards' => array(
			array( '01', 'Custom WordPress', 'PHP templates, dynamic content and reusable components without relying on a visual builder.' ),
			array( '02', 'True responsive design', 'Hierarchy, navigation and grids adapted for mobile, tablet and desktop.' ),
			array( '03', 'Multilingual experience', 'Spanish, English and French with localized URLs, hreflang tags and persistent navigation.' ),
		),
		'design_kicker' => 'Visual system', 'design_title' => 'Editorial, contemporary and functional.',
		'design_text' => 'Expressive typography, accessible contrast, generous rhythm and a deep green palette create a restrained identity with character.',
		'features' => array( 'Anchor navigation without broken links', 'Visible focus states and accessible controls', 'Responsive images with lazy loading', 'Essential technical SEO built into the theme' ),
		'content_kicker' => 'Dynamic content', 'content_title' => 'WordPress remains the editor.', 'content_lead' => 'Published posts are automatically integrated into the home page.', 'read' => 'Read article',
		'cta_title' => 'A solid foundation for the next project.', 'cta_text' => 'The theme is ready to connect forms, analytics, an advanced multilingual CMS or a public demo.', 'cta_button' => 'Review the solution',
	),
	'fr' => array(
		'eyebrow' => 'Projet de portfolio · Thème WordPress sur mesure',
		'title' => 'Une landing page multilingue conçue pour convertir.',
		'lead' => 'Une expérience éditoriale claire, rapide et accessible, créée avec PHP, JavaScript et CSS. Sans constructeur visuel ni dépendances inutiles.',
		'primary' => 'Explorer le projet', 'secondary' => 'Voir les compétences',
		'proof' => 'Développé avec',
		'project_kicker' => 'Le projet', 'project_title' => 'Un design intentionnel, un code réfléchi.',
		'project_text' => 'Cette démonstration transforme un modèle initial en pièce de portfolio : identité cohérente, architecture one-page, contenu en trois langues et expérience mobile soignée.',
		'stat_one' => 'Langues', 'stat_two' => 'Extensions requises', 'stat_three' => 'Thème sur mesure',
		'cap_kicker' => 'Compétences', 'cap_title' => 'Une base professionnelle facile à faire évoluer', 'cap_lead' => 'Chaque décision équilibre présentation, performance et maintenance.',
		'cards' => array(
			array( '01', 'WordPress sur mesure', 'Modèles PHP, contenu dynamique et composants réutilisables sans constructeur visuel.' ),
			array( '02', 'Responsive authentique', 'Hiérarchie, navigation et grilles adaptées au mobile, à la tablette et au bureau.' ),
			array( '03', 'Expérience multilingue', 'Espagnol, anglais et français avec URL localisées, balises hreflang et navigation persistante.' ),
		),
		'design_kicker' => 'Système visuel', 'design_title' => 'Éditorial, contemporain et fonctionnel.',
		'design_text' => 'Une typographie expressive, un contraste accessible, un rythme généreux et une palette vert profond créent une identité sobre et singulière.',
		'features' => array( 'Navigation par ancres sans liens cassés', 'États de focus visibles et contrôles accessibles', 'Images responsives avec chargement différé', 'SEO technique essentiel intégré au thème' ),
		'content_kicker' => 'Contenu dynamique', 'content_title' => 'WordPress reste l’éditeur.', 'content_lead' => 'Les articles publiés sont automatiquement intégrés à la page d’accueil.', 'read' => 'Lire l’article',
		'cta_title' => 'Une base solide pour le prochain projet.', 'cta_text' => 'Le thème est prêt à connecter des formulaires, des outils analytiques, un CMS multilingue avancé ou une démo publique.', 'cta_button' => 'Examiner la solution',
	),
);

$c = $copy[ am_get_language() ];
$uploads = wp_upload_dir();
$image_base = trailingslashit( $uploads['baseurl'] ) . '2026/08/';
?>

<main id="main-content">
	<section class="hero portfolio-hero">
		<div class="container hero__grid">
			<div class="hero__copy">
				<span class="eyebrow"><?php echo esc_html( $c['eyebrow'] ); ?></span>
				<h1><?php echo esc_html( $c['title'] ); ?></h1>
				<p class="desc"><?php echo esc_html( $c['lead'] ); ?></p>
				<div class="hero__actions">
					<a href="#project" class="btn btn-primary"><?php echo esc_html( $c['primary'] ); ?> <span aria-hidden="true">↓</span></a>
					<a href="#capabilities" class="btn btn-secondary"><?php echo esc_html( $c['secondary'] ); ?></a>
				</div>
				<div class="tech-line" aria-label="<?php echo esc_attr( $c['proof'] ); ?> WordPress, PHP, JavaScript, CSS">
					<span><?php echo esc_html( $c['proof'] ); ?></span><strong>WordPress</strong><strong>PHP</strong><strong>JavaScript</strong><strong>CSS</strong>
				</div>
			</div>
			<div class="hero__media portfolio-preview">
				<div class="preview-toolbar" aria-hidden="true"><span></span><span></span><span></span><small><?php echo esc_html( wp_parse_url( home_url( '/' ), PHP_URL_HOST ) ); ?></small></div>
				<img src="<?php echo esc_url( $image_base . 'chico.jpg' ); ?>" alt="<?php echo esc_attr( am_project_name() ); ?>" fetchpriority="high">
				<div class="preview-badge">ES <span>·</span> EN <span>·</span> FR</div>
			</div>
		</div>
	</section>

	<section id="project" class="section section--alt project-section">
		<div class="container project-grid">
			<div>
				<span class="eyebrow"><?php echo esc_html( $c['project_kicker'] ); ?></span>
				<h2 class="section-title"><?php echo esc_html( $c['project_title'] ); ?></h2>
			</div>
			<div>
				<p class="project-lead"><?php echo esc_html( $c['project_text'] ); ?></p>
				<div class="project-stats">
					<div><strong>3</strong><span><?php echo esc_html( $c['stat_one'] ); ?></span></div>
					<div><strong>0</strong><span><?php echo esc_html( $c['stat_two'] ); ?></span></div>
					<div><strong>100%</strong><span><?php echo esc_html( $c['stat_three'] ); ?></span></div>
				</div>
			</div>
		</div>
	</section>

	<section id="capabilities" class="section capabilities-section">
		<div class="container">
			<div class="section-heading-centered">
				<span class="eyebrow"><?php echo esc_html( $c['cap_kicker'] ); ?></span>
				<h2 class="section-title"><?php echo esc_html( $c['cap_title'] ); ?></h2>
				<p class="section-lead"><?php echo esc_html( $c['cap_lead'] ); ?></p>
			</div>
			<div class="capability-grid">
				<?php foreach ( $c['cards'] as $card ) : ?>
					<article class="capability-card">
						<span class="capability-number"><?php echo esc_html( $card[0] ); ?></span>
						<h3><?php echo esc_html( $card[1] ); ?></h3>
						<p><?php echo esc_html( $card[2] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="design" class="section section--dark design-section">
		<div class="container design-grid">
			<div class="design-visual">
				<img src="<?php echo esc_url( $image_base . 'planeta.png' ); ?>" alt="" loading="lazy">
				<div class="palette-card" aria-label="Color palette"><span></span><span></span><span></span><span></span></div>
			</div>
			<div>
				<span class="eyebrow"><?php echo esc_html( $c['design_kicker'] ); ?></span>
				<h2><?php echo esc_html( $c['design_title'] ); ?></h2>
				<p><?php echo esc_html( $c['design_text'] ); ?></p>
				<ul class="feature-list">
					<?php foreach ( $c['features'] as $feature ) : ?><li><span aria-hidden="true">✓</span><?php echo esc_html( $feature ); ?></li><?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>

	<?php $latest_posts = new WP_Query( array( 'posts_per_page' => 3, 'post_status' => 'publish' ) ); ?>
	<?php if ( $latest_posts->have_posts() ) : ?>
		<section id="content" class="section content-section">
			<div class="container">
				<div class="blog-head">
					<div><span class="eyebrow"><?php echo esc_html( $c['content_kicker'] ); ?></span><h2 class="section-title"><?php echo esc_html( $c['content_title'] ); ?></h2><p class="section-lead"><?php echo esc_html( $c['content_lead'] ); ?></p></div>
				</div>
				<div class="blog-grid">
					<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
						<a class="blog-card" href="<?php the_permalink(); ?>">
							<div class="blog-card__meta"><span class="blog-card__tag"><?php $cats = get_the_category(); echo $cats ? esc_html( $cats[0]->name ) : 'WordPress'; ?></span><span class="blog-card__time"><?php am_reading_time(); ?></span></div>
							<h3><?php the_title(); ?></h3><p><?php am_excerpt( 22 ); ?></p>
							<div class="blog-card__footer"><span><?php echo esc_html( get_the_date() ); ?></span><span class="blog-card__read"><?php echo esc_html( $c['read'] ); ?> →</span></div>
						</a>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<section id="contact" class="section portfolio-cta">
		<div class="container portfolio-cta__inner">
			<div><span class="eyebrow">WordPress · PHP · JavaScript · CSS</span><h2><?php echo esc_html( $c['cta_title'] ); ?></h2><p><?php echo esc_html( $c['cta_text'] ); ?></p></div>
			<a href="#project" class="btn btn-invert"><?php echo esc_html( $c['cta_button'] ); ?> ↑</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>
