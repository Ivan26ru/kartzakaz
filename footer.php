<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<hr>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/neon-logo-mini.png" class="w100 box-center">
					<p class="text-success">Скупка картриджей</p>
				</div>
				<div class="col-md-7">

<blockquote class="blockquote-reverse">
  <p>Клиент не может быть просто удовлетворен.<br>Клиент должен быть доволен!</p>
  <small><cite title="Source Title">Майкл Делл.</cite></small>
</blockquote>
				</div>
				<div class="col-md-2">
					<div class="text-right">
											<a href="tel:+79187959105" class="tel"><span class="glyphicon glyphicon-earphone"></span>7(918)795-91-05</a><br>
						<a href="mailto:info@kartzakaz.ru">
							<span class="glyphicon glyphicon-envelope"></span>
							info@kartzakaz.ru</a>
						<p><b>покупка картриджей</b><br>
						оптом и в розницу</p>
					</div>
				</div>
					<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
						'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
						'container'=> false, // обертка списка, false - это ничего
						'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
				  		'menu_id' => 'bottom-nav', // id для ul
				  		'fallback_cb' => false
				  	);
					//wp_nav_menu($args); // выводим нижние меню
					?>
			</div>
		</div>
	</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>