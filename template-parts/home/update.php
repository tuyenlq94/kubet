<?php
$title_update = rwmb_meta('title_update');
$updates = rwmb_meta('group_cap_nhap');
?>
<section class="home-update">
	<div class="container">
		<h2 class="title"><?= esc_html($title_update);?></h2>
		<div class="home-update__wrap">
			<ul class="tabs update-show" id="tab">
				<?php
				$i = 1;
				foreach ($updates as $value) :
					$title = $value['title_tab'];
					if ($i === 1) {
						$current = 'current';
					} else {
						$current = '';
					}
				?>
					<li class="tab-link <?= $current; ?>" data-tab="tab_<?= $i; ?>">
						<?= $title; ?>
					</li>
				<?php
					$i++;
				endforeach;
				?>
			</ul>
			<div id="tab-content">
				<?php
				$j = 1;
				foreach ($updates as $value) :
					$content = $value['content'];
					if ($j === 1) {
						$current = 'current';
					} else {
						$current = '';
					}
				?>
					<div id="tab_<?= $j; ?>" class="tab-content <?= $current; ?>">
						<div class="entry-content">
							<?= wp_kses_post(wpautop($content));?>
						</div>
					</div>
				<?php
					$j++;
				endforeach;
				?>
			</div>
		</div>
	</div>
</section>