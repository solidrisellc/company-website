<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Solid-Rise
 */

get_header();
?>


		<?php
		while ( have_posts() ) :
			the_post();

			if(get_post_type() == "services") {
			    get_template_part( 'template-parts/content-service', get_post_type() );
			}
			elseif(get_post_type() == "property") {
			    get_template_part( 'template-parts/content-property', get_post_type() );
			}
			elseif(get_post_type() == "post") {
			    get_template_part( 'template-parts/content-blog', get_post_type() );
			}
			else {
			    get_template_part( 'template-parts/content', get_post_type() );
			}

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'solid-rise' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'solid-rise' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>


<?php
get_footer();
