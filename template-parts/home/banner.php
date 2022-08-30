<?php
$images = rwmb_meta('image_banner');
$group_link = rwmb_meta('group_link');
?>
<section class="banner">
	<?php foreach($images as $image ) : ?>
		<img src="<?= esc_url($image['full_url']);?>" alt="">
	<?php endforeach; ?>
</section>
<section class="section-link">
	<div class="container">
		<div class="section-link__wrap">
			<?php 
			foreach($group_link as $value) : 
				$image = $value['image'];
				$title = $value['title'];
				$link = $value['link'];	
			?>
				<div class="section-link__item">
					<div class="section-link__image">
						<img src="<?= esc_url(wp_get_attachment_image_url( $image, 'full', false ));?>" alt="<?= esc_html($title);?>">
					</div>
					<div class="section-link__title">
						<a href="<?= esc_url($link);?>"><?= esc_html($title);?></a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>