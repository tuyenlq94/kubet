<?php // @codingStandardsIgnoreLine
/**
	Template Name: Home
 */
get_header( 'home' );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/home/banner' );
		get_template_part( 'template-parts/home/about' );
		get_template_part( 'template-parts/home/update' );
		get_template_part( 'template-parts/home/why' );
		get_template_part( 'template-parts/home/about-kubet' );
		get_template_part( 'template-parts/home/products' );
		get_template_part( 'template-parts/home/huong-dan' );
		get_template_part( 'template-parts/home/vuot-troi' );
		get_template_part( 'template-parts/home/luu-y' );
		get_template_part( 'template-parts/home/faq' );
		get_template_part( 'template-parts/home/ket_luan' );
		get_template_part( 'template-parts/home/news' );
	endwhile;
	?>

</main>
<?php

get_footer();
