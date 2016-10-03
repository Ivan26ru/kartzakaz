<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<section>
	<div class="container">
		<div class="row">
				<?php get_template_part( 'leftmenu' )?>
				<h1 class="text-center"><?php single_cat_title(); // название категории ?></h1>
<!-- таблица для вывода списка картриджей -->
				<table class="table table-striped table-hover">
					<tr>
						<th>#</th>
						<th>Название</th>
						<th>Принтер</th>
						<th>Цена</th>
					</tr>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop-kart'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
				</table>
<!-- /таблица для вывода списка картриджей -->
				<?php //pagination(); // пагинация, функция нах-ся в function.php ?>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>