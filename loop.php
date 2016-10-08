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
			<!-- <div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
			</div> -->
		<?php } ?>
		<?php the_excerpt(); ?>
<!-- 		<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } // разные классы в зависимости есть ли миниатюра ?>">
			<?php the_content('читать дальше'); // пост превью, до more ?>
		</div> -->
		<a href="<?php the_permalink(); ?>" class="btn btn-default">Читать дальше</a>
	</div>
</article>
<hr>