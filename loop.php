<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
		<?php } ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="btn btn-default">Читать дальше</a>
	</div>
</article>
<hr>