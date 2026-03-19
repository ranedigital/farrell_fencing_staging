<?php
/**
 * Main categories
 * Pages > Front
 */

// home page ID
$home_id = 7;

if( have_rows( 'rptr_wood_cats', $home_id )): ?>		
<section class="main-cats">
	<div class="container">

		<div class="cat-grid">
			<?php while( have_rows( 'rptr_wood_cats', $home_id )): the_row();

				// Vars
				$main_image = get_sub_field( 'main_image' );
				$main_image_url = $main_image[ 'url' ];
				$title = get_sub_field( 'title' );
				$link_id = get_sub_field( 'link' );
				$link = get_the_permalink( $link_id );

			?>
			<div class="cat-grid__cell">
				<!-- repeated code -->
				<a href="<?php echo $link; ?>" class="cat-grid__link">
					<div class="cat-card wow fadeInUp" data-wow-delay="<?php echo $wow_delay; ?>s">
						<div class="cat-card__img-wrap" style="background-image: url(<?php echo $main_image_url; ?>);"></div>
						<h2 class="cat-card__title"><?php echo $title; ?></h2>
				  	</div>
			  	</a>
		  	</div>
			<?php $wow_delay += 0.2; endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>