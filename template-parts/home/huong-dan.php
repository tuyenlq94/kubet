<?php
$title_huong_dan   = rwmb_meta( 'title_huong_dan' );
$content_huong_dan = rwmb_meta( 'content_huong_dan' );
$group_huong_dan   = rwmb_meta( 'group_huong_dan' );
?>
<section class="huong-dan">
	<div class="container">
		<h2 class="title"><?= esc_html( $title_huong_dan );?></h2>
		<?= wp_kses_post( wpautop( $content_huong_dan ) );?>
		<div class="huong-dan__wrap">
			<?php
			foreach ( $group_huong_dan as $value ) :
				$title   = $value['title'];
				$content = $value['content'];
				$image   = $value['image'];
				?>
				<div class="huong-dan__item">
					<div class="huong-dan__item--content">
						<h3><?= esc_html( $title )?></h3>
						<?= wp_kses_post( wpautop( $content ) );?>
					</div>
					<div class="huong-dan__item--image">
						<img src="<?= esc_url( wp_get_attachment_image_url( $image, 'full', false ) );?>" alt="">
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
		<div class="huong-dan__inner">
			<?php
			$title_tai_app = rwmb_meta( 'title_tai_app' );
			$content_app   = rwmb_meta( 'content_tai_app' );
			?>
			<h3><?= esc_html( $title_tai_app );?></h3>
			<?= wp_kses_post( wpautop( $content_app ) );?>
		</div>
	</div>
</section>
