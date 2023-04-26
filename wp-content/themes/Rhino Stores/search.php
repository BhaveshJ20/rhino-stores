<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
$search = get_query_var('s');
$args = array(
	'post_type' => array( 'page','leaflets','our_latest_promotion'),
	's' => $search,
	'paged' => $paged,
	'orderby' => 'title',
	'order' => 'ASC'
);
$the_query = new WP_Query( $args );?>

<div class="search-result-wrap">
	<div class="container">
	<?php
if ( $the_query->have_posts() ) {
	_e("<div class='title'><h2 class='red-text'>Search Results for: ".get_query_var('s')."</h2></div>");
	while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class='list1'><ul><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/></li></ul></div><?php
	endwhile; 
	wp_reset_query();
	wp_reset_postdata();       
}else{ ?>
	<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
	<div class="alert alert-info">
		<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
	</div>
<?php } ?>
</div></div>
<?php get_footer(); ?>