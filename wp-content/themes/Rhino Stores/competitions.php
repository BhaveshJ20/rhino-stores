<?php
/**
 * Template Name: Specials | Competitions
 * The front page template file
 *
 */
get_header(); ?>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content/content', 'competitions' );
			endwhile;
		else :
			get_template_part( 'template-parts/content/content', 'none' );
		endif; ?>
<?php get_footer();
