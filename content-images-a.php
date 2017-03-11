<section class="block gallery-block-a">

	<?php 

	$imageOne = get_sub_field('photo_one_a');

	if( !empty($imageOne) ): ?>

		<div class="photo-one">
			<img src="<?php echo $imageOne['url']; ?>" alt="<?php echo $imageOne['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imageTwo = get_sub_field('photo_two_a');

	if( !empty($imageTwo) ): ?>

		<div class="photo-two">
			<img src="<?php echo $imageTwo['url']; ?>" alt="<?php echo $imageTwo['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$imageThree = get_sub_field('photo_three_a');

	if( !empty($imageThree) ): ?>

		<div class="photo-three">
			<img src="<?php echo $imageThree['url']; ?>" alt="<?php echo $imageThree['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>