<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kube
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="entry-content">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="the_excerpt"><?php the_excerpt(); ?></div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
