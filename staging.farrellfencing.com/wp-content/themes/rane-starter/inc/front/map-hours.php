<?php
/**
 * Map & opening hours
 * Hours - theme settings > company details
 */

$opt_google_maps_embed_code = get_field( 'opt_google_maps_embed_code', 'option' );
$company_email_opt = get_field( 'company_email_opt', 'option' );
$company_addr_opt = get_field( 'company_addr_opt', 'option' );


?>
<section class="map-hours">
	<div class="map-hours__col map-hours__col--map">
		<?php echo $opt_google_maps_embed_code; ?>
	</div>

	<div class="map-hours__col map-hours__col--hours">
		<div class="map-hours__col-inner">
			<h2 class="site-title txt-centre txt-white">
				Open Hours
			</h2>

			<?php if( have_rows( 'rptr_opening_hours_opt', 'option' )): ?>	
			<div class="hours-list">	
				<?php while( have_rows( 'rptr_opening_hours_opt', 'option' )): the_row();
			
					// Vars
					$day = get_sub_field( 'day' );
					$time = get_sub_field( 'time' );
			
				?>
				<!-- repeated code -->
				<div class="hours-list__item">
					<div class="hours-list__day">
						<?php echo $day; ?>
					</div>
					<div class="hours-list__hours">
						<?php echo $time; ?>
					</div>
			  	</div>
				<?php endwhile; ?>	
			</div>
			<?php endif; ?>

			<div class="map-hours__email txt-centre txt-white">
				<a href="mailto:<?php echo $company_email_opt; ?>" class="txt-white">
					<?php echo $company_email_opt; ?>
				</a>
			</div>

			<div class="map-hours__addr txt-centre txt-white">
				<?php echo $company_addr_opt; ?>
			</div>

		</div>
	</div>

</section>
