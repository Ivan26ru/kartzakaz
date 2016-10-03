<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
	<?php //echo get_post_meta('cena'); ?>
	<?php
		echo get_field('cena');
		echo get_field('printer');
		?>

		<table class="table table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Название</th>
				<th>Принтер</th>
				<th>Цена</th>
			</tr>
			<tr>
				<td>#</td>
				<td>Название</td>
				<td>Принтер</td>
				<td>Цена</td>
			</tr>
			<tr>
				<td>#</td>
				<td>Название</td>
				<td>Принтер</td>
				<td>Цена</td>
			</tr>
		</table>

	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<!-- <div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
			</div> -->
		<?php } ?>
		<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } // разные классы в зависимости есть ли миниатюра ?>">
			<?php the_content(''); // пост превью, до more ?>
		</div>
	</div>
</article>