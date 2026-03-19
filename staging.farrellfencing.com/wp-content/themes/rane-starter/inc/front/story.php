<?php
/**
 * Main story section
 * Pages > Front
 */


// Vars
$story_main_image = get_field( 'story_main_image' );
$story_main_image_url = $story_main_image[ 'url' ];
$story_title = get_field( 'story_title' );
$story_main_text = get_field( 'story_main_text' );
$story_button_text = get_field( 'story_button_text' );
$story_button_lnk_id = get_field( 'story_button_lnk_id' );
$btn_link = get_the_permalink( $story_button_lnk_id );

?>
<section class="story">
	
	<div class="story__col story__col--image">
		<img src="<?php echo $story_main_image_url; ?>" alt="<?php echo $story_title; ?>" class="story__hreo-img wow fadeIn">
	</div>

	<div class="story__col story__col--txt">
		<div class="story__col-inner wow fadeIn">
			<h2 class="site-title site-title--white">
				<?php echo $story_title; ?>
			</h2>

			<div class="rte story__text">
				<?php echo $story_main_text; ?>
			</div>

			<a href="<?php echo $btn_link; ?>" class="site-btn site-btn--white">
				<?php echo $story_button_text; ?>
			</a>

		</div>
	</div>

</section>