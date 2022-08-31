<?php
$image   = rwmb_meta( 'image_ket_luan' );
$title   = rwmb_meta( 'title_ket_luan' );
$content = rwmb_meta( 'content_ket_luan' );
?>
<section class="ket-luan">
	<div class="container">
		<img src="<?= esc_url( $image['full_url'] );?>" alt="">
		<h2 class="title"><?= esc_html( $title );?></h2>
		<?= wp_kses_post( wpautop( $content ) )?>
	</div>
</section>
