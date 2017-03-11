<section class="block">
	<div class="alignright">
		<?php the_sub_field('text_right'); ?>
	</div>

	<div class="alignleft">
		<?php 

		$imageLeft = get_sub_field('image_left');

		if( !empty($imageLeft) ): ?>

			<img src="<?php echo $imageLeft['url']; ?>" alt="<?php echo $imageLeft['alt']; ?>" />

		<?php endif; ?>
	</div>
</section>