<?php
$title_luu_y   = rwmb_meta( 'title_luu_y' );
$content_luu_y = rwmb_meta( 'content_luu_y' );
?>
<section class="luu-y">
	<div class="container">
		<h2 class="title"><?= esc_html( $title_luu_y );?></h2>
		<?= wp_kses_post( wpautop( $content_luu_y ) );?>
	</div>
</section>
