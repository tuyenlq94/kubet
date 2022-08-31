<?php
$title_faq   = rwmb_meta( 'title_faq' );
$content_faq = rwmb_meta( 'content_fqa' );
$questions   = rwmb_meta( 'faq' );
?>
<section class="home-faq">
	<div class="container">
		<h2 class="title"><?= esc_html( $title_faq );?></h2>
		<?= wp_kses_post( wpautop( $content_faq ) );?>
		<div class="home-faq__wrap">
			<?php
			$i = 1;
			foreach ( $questions as $question ) :
				$name    = $question['title'];
				$content = $question['content'];
				if ( $i === 1 ) {
					$open = 'open';
				} else {
					$open = '';
				}
				?>
				<details <?= esc_html( $open )?>>
					<summary>
						<?= esc_html( $name ); ?>
					</summary>
					<div class="panel">
						<?= wp_kses_post( wpautop( $content ) ); ?>
					</div>
				</details>
				<?php
				$i++;
			endforeach;
			?>
		</div>
	</div>
</section>
