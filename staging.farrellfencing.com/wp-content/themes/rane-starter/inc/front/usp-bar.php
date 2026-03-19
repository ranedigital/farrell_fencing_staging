<?php
/**
 * USP Bar
 * Theme Settings > USP Bar Items
 */

if( have_rows( 'rptr_usp_bar_items', 'option' )): ?>
<section class="section-usp-bar">
	<div class="container">

		<div class="usp-bar">
		<?php while( have_rows( 'rptr_usp_bar_items', 'option' )): the_row();

			// Vars
			$icon = get_sub_field( 'icon' );
			$icon_url = $icon[ 'url' ];
			$text = get_sub_field( 'text' );

		?>
			<!-- repeated code -->
			<div class="usp-bar__item wow fadeInUp">
				<div class="usp-bar__icon">
					<img src="<?php echo $icon_url; ?>" alt="<?php echo $text; ?>">
				</div>
				<div class="usp-bar__text">
					<?php echo $text; ?>
				</div>
		  	</div>
		<?php endwhile; ?>
		</div>

	</div>
</section>
<?php endif; ?>