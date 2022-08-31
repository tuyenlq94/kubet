<?php
$title_vuot_troi   = rwmb_meta( 'title_vuot_troi' );
$content_vuot_troi = rwmb_meta( 'content_vuot_troi' );
$group_vuot_troi   = rwmb_meta( 'group_vuot_troi' );
?>
<section class="vuot-troi">
	<div class="container">
		<h2 class="title"><?= esc_html( $title_vuot_troi );?></h2>
		<?= wp_kses_post( wpautop( $content_vuot_troi ) ); ?>
		<div class="vuot-troi__wrap">
			<?php
			foreach ( $group_vuot_troi as $value ) :
				$image   = $value['image'];
				$title   = $value['title'];
				$content = $value['content'];
				?>
				<div class="vuot-troi__item">
					<div class="vuot-troi__image">
						<img src="<?= esc_url( wp_get_attachment_image_url( $image, 'full', false ) );?>" alt="">
					</div>
					<div class="vuot-troi__content">
						<h3><?= esc_html( $title );?></h3>
						<?= wp_kses_post( wpautop( $content ) );?>
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
