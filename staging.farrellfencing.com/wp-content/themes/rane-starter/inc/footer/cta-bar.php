<?php
/**
 * Call to Action bar
 */

// Vars
$cta_bar_text_opt = get_field( 'cta_bar_text_opt', 'option' );
$cta_bar_btn_txt = get_field( 'cta_bar_btn_txt', 'option' );
$cta_bar_btn_link_id = get_field( 'cta_bar_btn_link_id', 'option' );
$cta_bar_btn_link = get_the_permalink( $cta_bar_btn_link_id );

?>
<section class="section-cta-bar">
	<div class="container">

		<div class="cta-bar">
			<p class="cta-bar__txt">
				<?php echo $cta_bar_text_opt; ?>
			</p>

			<a href="<?php echo $cta_bar_btn_link; ?>" class="site-btn site-btn--edge">
				<?php echo $cta_bar_btn_txt; ?>
			</a>
		</div>
		
	</div>
</section>