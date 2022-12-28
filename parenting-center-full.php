<?php /* Template Name: Parenting Center - Full */ ?>

<?php
/**
 * The template for displaying Parenting Center pages
 *
 * @package Peace_At_Home
 */

get_header( 'parenting-center' );
?>

	<main id="primary" class="site-main">
		<?php
			// Check if page builder has values
			if( have_rows('page_builder:_parenting_center') ): 
				// Loop over layouts
				while( have_rows('page_builder:_parenting_center') ) : the_row();
					if( get_row_layout() == 'section:_hero' ):
						// Retrieve required sub fields
						$hero = get_sub_field('hero');
						if( $hero['type'] == 'standard' ):
							$standard = $hero['standard'];
							get_template_part( 'template-parts/hero/hero-parenting-center', 'standard', $standard );
						endif;
					elseif( get_row_layout() == 'section:_course_offerring' ):
						$courses = get_sub_field( 'courses' );
						if( $courses['type'] == 'series' ):
							$series = $courses['series'];
							get_template_part( 'template-parts/course/course-parenting-center', 'series', $series );
						elseif( $courses['type'] == 'special-class' ): 
							$special_class = $courses['special_class'];
							get_template_part( 'template-parts/course/course-parenting-center', 'special-class', $special_class );
						endif;
					elseif( get_row_layout() == 'section:_card' ):
						$cards = get_sub_field( 'cards' );
						if( $cards['type'] == 'dynamic' ):
							$dynamic = $cards['dynamic'];
							get_template_part( 'template-parts/card/card','dynamic', $dynamic );
						endif;
					endif;
				endwhile; // End of the loop
			endif; 
		?>
	</main><!-- #main -->

<?php

get_footer();
