<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header>
	<!-- шапка -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
			<a href="<?php echo site_url(); ?>">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo-img"> -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/neon-logo-2.png" class="w100">
				<!-- <span class="site-name"><?php bloginfo('name'); ?></span> -->
			</a>
				<!-- <p class="text-center text-success skupka">Скупка картриджей</p> -->
			</div>

			<div class="col-lg-offset-2 col-lg-3 col-md-4 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/header/tel.png" class="tel-img">
					<div class="header-div-text">
						<a href="tel:+79187959105" class="tel"><span class="glyphicon glyphicon-earphone"></span>7(918)795-91-05</a><br>
						<a href="tel:89854357055" class="tel whats-app">8(985)435-70-55</a><br>
						<a href="mailto:info@kartzakaz.ru">
							<span class="glyphicon glyphicon-envelope"></span>
							info@kartzakaz.ru</a>
						<p><b>покупка картриджей</b><br>
					</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header/time-work.png" class="tel-img">
				<div class="header-div-text">
					<p>График работы:</p>
					<p><span class="label label-success">пн-пт:9:00-19:00</span><br>
					<span class="label label-danger">сб-вс:11:00-18:00</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- \шапка -->

	<!-- top menu -->
		<!-- <div class="container-fluid"> -->
			<!-- <div class="row"> -->
				<!-- <div class="col-md-12"> -->
					<!-- <nav class="navbar navbar-default"> -->
					<nav class="navbar navbar-inverse" id="top-navbar">
						<div class="navbar-header">
						<a class="navbar-brand site-name-menu" href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/neon-logo-mini-2.png" class="logo-img-mini dn hidden-sm" id="menu-top-name-siti">
							<!-- Скупка картриджей -->
						</a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
<!-- кнопки справа-->
		                            <!-- добавил другую форму для поиска, чтоб с главной всегда искало и метод get -->
                            <form class="navbar-form navbar-right visible-lg" id="search_string" method="get" role="search" action="<?php echo home_url( '/' ) ?>" >
                            <!-- сама форма поиска -->
                            <?php get_search_form() ?>
                            </form>
                            <!-- /кнопки справа -->
						</div>
					</nav>
				<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->
		<!-- container -->
	</header>
		<div class="container">
                            <form class="navbar-form navbar-right hidden-lg" id="search_string" method="get" role="search" action="<?php echo home_url( '/' ) ?>" >
                            <!-- сама форма поиска -->
                            <?php get_search_form() ?>
                            </form>
	</div>

	<div class="clearfix"></div>


	<?php if( is_front_page() ) { //Если главная страница, отобразить карусель
	get_template_part( 'carousel' );}
?>

	<div class="clearfix"></div>

	<?php //if( is_front_page() ) { //Если главная страница, отобразить значки принтеров
	//get_template_part( 'list-item' );}
?>