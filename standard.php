<?php /* Template Name: Standard */ ?>

<?php
/**
 * The template for displaying Standard pages
 *
 * @package Peace_At_Home
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			// Check if page builder has values
			if( have_rows('page_builder:_standard') ): 
				// Loop over layouts
				while( have_rows('page_builder:_standard') ) : the_row();
					if( get_row_layout() == 'section:_hero' ):
						// Retrieve required sub fields
						$hero = get_sub_field('hero');
						if( $hero['type'] == 'slideshow' ):
							$slideshow = $hero['slideshow'];
							get_template_part( 'template-parts/hero/hero', 'slideshow', $slideshow );
						elseif( $hero['type'] == 'dynamic' ):
							$dynamic = $hero['dynamic'];
							get_template_part( 'template-parts/hero/hero', 'dynamic', $dynamic );
						endif;
					elseif( get_row_layout() == 'section:_split_content' ):
						$split_content = get_sub_field( 'split_content' );
						if( $split_content['type'] == 'media-card' ):
							$media_card = $split_content['media_cards'];
							get_template_part( 'template-parts/split-content/split-content', 'media-cards', $media_card );
						elseif( $split_content['type'] == 'media-text' ):
							$media_text = $split_content['media_text'];
							get_template_part( 'template-parts/split-content/split-content', 'media-text', $media_text );
						endif;
					elseif( get_row_layout() == 'section:_card' ):
						$cards = get_sub_field( 'cards' );
						if( $cards['type'] == 'dynamic' ):
							$dynamic = $cards['dynamic'];
							get_template_part( 'template-parts/card/card','dynamic', $dynamic );
						elseif( $cards['type'] == 'pricing' ):
							$pricing = $cards['pricing'];
							get_template_part( 'template-parts/card/card','pricing', $pricing );
						elseif( $cards['type'] == 'circular' ):
							$circular = $cards['circular'];
							get_template_part( 'template-parts/card/card','circular', $circular );
						elseif( $cards['type'] == 'course' ):
							$course = $cards['courses'];
							get_template_part( 'template-parts/card/card','course', $course );
						endif;
					elseif( get_row_layout() == 'section:_partners' ):
						$partners = get_sub_field( 'partners' );
						get_template_part( 'template-parts/partners', '', $partners );
					elseif( get_row_layout() == 'section:_testimonials' ):
						$testimonials = get_sub_field( 'testimonials' );
						if( $testimonials['type'] == 'single' ):
							$single = $testimonials['single'];
							get_template_part( 'template-parts/testimonial/testimonial','single', $single );
						endif;
					endif;

				endwhile; // End of the loop
			endif; 
		?>
	</main><!-- #main -->

<?php
get_footer();
