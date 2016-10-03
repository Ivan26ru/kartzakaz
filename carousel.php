<?php
/**
 * Карусель (carousel.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!-- карусель -->
 <div class="container">
 <div class="hidden-sm hidden-xs">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider-karusel/1.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>ЛУЧШИЕ ЦЕНЫ В РЕГИОНЕ</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id eos autem quod, optio sed error hic necessitatibus deserunt dignissimos totam.</p> -->
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider-karusel/2.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>ВЫГОДНЫЕ УСЛОВИЯ ДЛЯ ПОСТОЯННЫХ КЛИЕНТОВ</h3>
                        <!-- <h3>LOREM IPSUM DOLO</h3> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum veniam voluptas necessitatibus tempora fugit laudantium, ducimus vero temporibus numquam possimus!</p> -->
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider-karusel/3.jpg" width="100%">
                    <div class="carousel-caption">
                      	<h3>ЗВОНИТЕ В ЛЮБОЕ ВРЕМЯ</h3>
					<!--<h3>LOREM IPSUM DOLOR</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sint earum officiis adipisci, quis blanditiis. Iste modi laboriosam natus, odio!</p> -->
                    </div>
               	</div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
	</div>
</div>
<div class="clearfix"></div>
<br>
<!-- /карусель -->