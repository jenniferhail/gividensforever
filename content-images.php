<section class="block gallery-block-a">

	<?php 

	$imageoneA = get_sub_field('photo_one');

	if( !empty($imageoneA) ): ?>

		<div class="photo-one-a">
			<img src="<?php echo $imageoneA['url']; ?>" alt="<?php echo $imageoneA['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imagetwoA = get_sub_field('photo_two');

	if( !empty($imagetwoA) ): ?>

		<div class="photo-two-a">
			<img src="<?php echo $imagetwoA['url']; ?>" alt="<?php echo $imagetwoA['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imagethreeA = get_sub_field('photo_three');

	if( !empty($imagethreeA) ): ?>

		<div class="photo-three-a">
			<img src="<?php echo $imagethreeA['url']; ?>" alt="<?php echo $imagethreeA['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>