<?php
$title_about = rwmb_meta('title_gioi_thieu');
$about_content = rwmb_meta('gioi_thieu');
?>
<section class="about">
	<div class="container">
		<div class="about__wrap">
			<h2 class="title"><?= esc_html($title_about);?></h2>
			<div class="about__content">
				<?= wp_kses_post(wpautop($about_content));?>
			</div>
		</div>
	</div>
</section>