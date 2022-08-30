<?php
$title_product = rwmb_meta('title_products');
$content_product = rwmb_meta('content_product');
$tab_products = rwmb_meta('hot_products');
?>
<section class="hot-products">
	<div class="container">
		<h2 class="title"><?= esc_html($title_product);?></h2>
		<?= wp_kses_post(wpautop($content_product));?>
		<div class="hot-products__wrap">
			<ul class="product-show" id="tab">
				<?php
				$i = 1;
				foreach ($tab_products as $value) :
					$title = $value['title'];
					if ($i === 1) {
						$current = 'current';
					} else {
						$current = '';
					}
				?>
					<li class="tab-link <?= $current; ?>" data-tab="product_<?= $i; ?>">
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
				foreach ($tab_products as $value) :
					$content = $value['content'];
					if ($j === 1) {
						$current = 'current';
					} else {
						$current = '';
					}
				?>
					<div id="product_<?= $j; ?>" class="content-product <?= $current; ?>">
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