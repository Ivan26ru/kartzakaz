<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // Подключаем header.php ?>
<section>
	<div class="container">
		<div class="row">
						<?php get_template_part( 'leftmenu' )?>
				<h1>Возможно был указан неверный адрес</h1>
				<p>Перейдите на главную страницу, либо воспользуйтесь формой поиска и Вы сможете найти то, что вам необходимо.</p>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>