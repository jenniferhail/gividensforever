<section class="block two-photos-block">

	<?php 

	$firstImage = get_sub_field('first_image');

	if( !empty($firstImage) ): ?>

		<div class="first-image">
			<img src="<?php echo $firstImage['url']; ?>" alt="<?php echo $firstImage['alt']; ?>" />
		</div>

	<?php endif; ?>

	<?php 

	$secondImage = get_sub_field('second_image');

	if( !empty($secondImage) ): ?>

		<div class="second-image">
			<img src="<?php echo $secondImage['url']; ?>" alt="<?php echo $secondImage['alt']; ?>" />
		</div>

	<?php endif; ?>

</section>