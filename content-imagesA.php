<section class="block gallery-block-a">

	<?php get_sub_field('testing'); ?>

	<?php 

	$imageoneA = get_sub_field('photo_one_a');

	if( !empty($imageoneA) ): ?>

		<div class="photo-one-a">
			<img src="<?php echo $imageoneA['url']; ?>" alt="<?php echo $imageoneA['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imagetwoA = get_sub_field('photo_two_a');

	if( !empty($imagetwoA) ): ?>

		<div class="photo-two-a">
			<img src="<?php echo $imagetwoA['url']; ?>" alt="<?php echo $imagetwoA['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imagethreeA = get_sub_field('photo_three_a');

	if( !empty($imagethreeA) ): ?>

		<div class="photo-three-a">
			<img src="<?php echo $imagethreeA['url']; ?>" alt="<?php echo $imagethreeA['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>