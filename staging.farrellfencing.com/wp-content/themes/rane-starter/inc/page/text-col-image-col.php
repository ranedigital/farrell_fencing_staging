<?php
/**
 * Text & Image Columns
 */

// Vars
$page_title = get_the_title();
$main_text = get_sub_field( 'main_text' );
$main_image = get_sub_field( 'main_image' );
$image_url = $main_image[ 'sizes' ][ 'builder-img' ];
$col_order = get_sub_field( 'col_order' );

// Class modifier

if( $col_order == "txt-img" ){
	$txt_class_modifier = "col-order-1";
	$img_class_modifier = "col-order-2";
}elseif( $col_order == "img-txt" ){
	$txt_class_modifier = "col-order-2";
	$img_class_modifier = "col-order-1";
}

?>
<div class="container">
	<div class="content-box__row">

		<div class="content-box__col content-box__col--txt <?php echo $txt_class_modifier; ?> wow fadeInLeft">
			<div class="rte">
				<?php echo $main_text; ?>
			</div>
		</div>

		<div class="content-box__col content-box__col--img <?php echo $img_class_modifier; ?> wow fadeInRight">
			<img src="<?php echo $image_url; ?>" alt="<?php echo $page_title; ?>">
		</div>
		
	</div>
</div>