<?php
/**
 * "Experience" section
 * Pages > Front
 */

// Vars
$blurb_title_text = get_field( 'blurb_title_text' );
$blurb_main_text = get_field( 'blurb_main_text' );

?>
<section class="section">
	<div class="container container--800">

		<h2 class="site-title txt-centre wow fadeIn">
			<?php echo $blurb_title_text; ?>
		</h2>

		<p class="txt-centre txt-no-margin txt-18px wow fadeIn">
			<?php echo $blurb_main_text; ?>
		</p>
		
	</div>
</section>