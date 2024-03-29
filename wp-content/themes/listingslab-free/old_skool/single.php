<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Business
 */

get_header(); ?>

	<main id="primary" class="site-main">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Child Page List") ) : endif; ?>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		the_post_navigation( array(
			'next_text' => wp_kses( __( '<span class="meta-nav">Next</span> %title', 'business_theme' ), array( 'span' => array( 'class' => array() ) ) ),
			'prev_text' => wp_kses( __( '<span class="meta-nav">Previous</span> %title', 'business_theme2' ), array( 'span' => array( 'class' => array() ) ) )
		) );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	</main><!-- #primary -->

<?php
get_footer();
