<?php
$title_nha_cai = rwmb_meta('title_nha_cai');
$image_nha_cai = rwmb_meta('image_nha_cai');
$content_nha_cai = rwmb_meta('content_nha_cai');
$about_nha_cai = rwmb_meta('group_nha_cai');
$title_partner = rwmb_meta('title_doi_tac');
$content_partner = rwmb_meta('content_doi_tac');
?>
<section class="about-dealer">
	<div class="container">
		<h2 class="title"><?= esc_html($title_nha_cai);?></h2>
		<div class="about-dealer__wrap">
			<div class="about-dealer__image">
				<img src="<?= esc_url($image_nha_cai['full_url']);?>" alt="">
			</div>
			<div class="about-dealer__content">
				<?= wp_kses_post(wpautop($content_nha_cai));?>
			</div>
		</div>
		<div class="about-dealer__inner">
			<?php
			foreach($about_nha_cai as $value) :
				$title = $value['title'];
				$content = $value['content'];
				$image = $value['image'];
				?>
				<div class="about-dealer__item">
					<div class="about-dealer__item--content">
						<h3><?= esc_html($title);?></h3>
						<?= wp_kses_post(wpautop($content));?>
					</div>
					<div class="about-dealer__item--image">
						<img src="<?= esc_url(wp_get_attachment_image_url( $image, 'full', false ));?>" alt="">
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
		<div class="about-dealer__partner">
			<h2><?= esc_html($title_partner);?></h2>
			<?= wp_kses_post(wpautop($content_partner));?>
		</div>
	</div>
</section>