<?php
$title_why = rwmb_meta('title_why');
$whys = rwmb_meta('group_why');
?>
<section class="why-chose">
	<div class="container">
		<h2 class="title"><?= esc_html($title_why);?></h2>
		<div class="why-chose__wrap">
			<?php
			$i = 1;
			foreach($whys as $why) :
				$content = $why['content'];
				?>
				<div class="why-chose__item">
					<div class="why-chose__num"><p>0<?= esc_html($i);?></p></div>
					<div class="why-chose__content"><?= wp_kses_post(wpautop($content));?></div>
				</div>
				<?php
				$i++;
			endforeach;
			?>
		</div>
	</div>
</section>