<section class="block gallery-block-b">

	<?php 

	$imageOneA = get_sub_field('photo_one');

	if( !empty($imageOneB) ): ?>

		<div class="photo-one-b">
			<img src="<?php echo $imageOneB['url']; ?>" alt="<?php echo $imageOneB['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imageTwoA = get_sub_field('photo_two');

	if( !empty($imageTwoB) ): ?>

		<div class="photo-two-b">
			<img src="<?php echo $imageTwoB['url']; ?>" alt="<?php echo $imageTwoB['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imageThreeA = get_sub_field('photo_three');

	if( !empty($imageThreeB) ): ?>

		<div class="photo-three-b">
			<img src="<?php echo $imageThreeB['url']; ?>" alt="<?php echo $imageThreeB['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>