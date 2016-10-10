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
						<?php
							//должно находится внутри цикла, проверка есть ли миниатюра
							if( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else {
								echo '<img src="'. get_template_directory_uri() .'/img/logo.png" />';
							}
							?>
						</p>

						<dl class="dl-horizontal">

  							<dt>Фирма:</dt>
  							<dd><?php the_category(',');// фипма?></dd>

  							<dt>Цена:</dt>
  							<dd><h4><span class="label label-info"><?php echo get_field('cena'); //цена?> руб.</span></h4></dd>

  							<dt>Принтер:</dt>
  							<dd><h4><span class="label label-info"><?php echo get_field('printer'); //принтер?></span></h4></dd>

  							<dt>Артикул:</dt>
  							<dd><h4><span class="label label-info"><?php echo get_field('articul'); //артикул?></span></h4></dd>

						</dl>

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
