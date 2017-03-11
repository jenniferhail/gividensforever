<section class="block gallery-block-b">

	<?php 

	$imageoneB = get_sub_field('image_one');

	if( !empty($imageoneB) ): ?>

		<div class="photo-one-b">
			<img src="<?php echo $imageoneB['url']; ?>" alt="<?php echo $imageoneB['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imagetwoB = get_sub_field('image_two');

	if( !empty($imagetwoB) ): ?>

		<div class="photo-two-b">
			<img src="<?php echo $imagetwoB['url']; ?>" alt="<?php echo $imagetwoB['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imagethreeB = get_sub_field('image_three');

	if( !empty($imagethreeB) ): ?>

		<div class="photo-three-b">
			<img src="<?php echo $imagethreeB['url']; ?>" alt="<?php echo $imagethreeB['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>