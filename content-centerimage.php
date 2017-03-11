<section class="block center-image-block">

	<?php 

	$imageCenter = get_sub_field('image_center');

	if( !empty($imageCenter) ): ?>

		<div class="image-center">
			<img src="<?php echo $imageCenter['url']; ?>" alt="<?php echo $imageCenter['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>