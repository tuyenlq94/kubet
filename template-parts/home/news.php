<?php
$args      = array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => 6,
	'category_name'  => 'tin-tuc',
);
$the_query = new WP_Query( $args );
?>
<section class="home-news">
	<div class="container">
		<h2 class="title">Tin tức mới nhất</h2>
		<div class="home-news__wrap">
			<?php
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					kubet_entry_post();
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
