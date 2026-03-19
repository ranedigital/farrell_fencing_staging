<?php
/**
 * Testimonials section
 * Theme Settings > Client Testimonials
 */

// Vars
$testimonial_bgd_img = get_field( 'testimonial_bgd_img', 'option' );
$testimonial_bgd_img_url = $testimonial_bgd_img[ 'url' ];

if( have_rows( 'rptr_client_testimonials', 'option' )): ?>
<section class="testimonials" style="background-image: url( <?php echo $testimonial_bgd_img_url; ?> );">


	<h2 class="site-title testimonials__title">
		Words From Our Clients
	</h2>
		
	<div class="testimonials__slider-wrap">
		<div class="testimonial-slider" id="testimonial-slider">
			<?php while( have_rows( 'rptr_client_testimonials', 'option' )): the_row();
		
				// Vars
				$testimonial = get_sub_field( 'testimonial' );
		
			?>
			
			<div class="testimonial-slider">
				<div class="testimonial-card">

					<div class="testimonial-card__quote">
						<?php echo $testimonial; ?>
					</div>

				</div>

		  	</div>
			<?php endwhile; ?>
		</div>
	</div>

</section>
<?php endif; ?>