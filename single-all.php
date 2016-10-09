<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<section>
	<div class="container">
		<div class="row">
				<?php get_template_part( 'leftmenu' )?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
						<h1 class="text-center"><?php the_title(); // заголовок поста ?></h1>
						<p class="text-center">
						<?php the_post_thumbnail();//миниатюра ?>
						</p>

						<dl class="dl-horizontal">

  							<dt>Цена:</dt>
  							<dd><?php echo get_field('cena'); //цена?> руб.</dd>

  							<dt>Принтер:</dt>
  							<dd><?php echo get_field('printer'); //цена?></dd>

  							<dt>Артикул:</dt>
  							<dd><?php echo get_field('articul'); //цена?></dd>

						</dl>
						<div class="meta">
							<p>Категории: <?php the_category(',') ?></p> <?php // ссылки на категории в которых опубликован пост, через зпт ?>
						</div>
						<?php the_content(); // контент ?>
					</article>
				<?php endwhile; // конец цикла ?>
				<hr>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>
