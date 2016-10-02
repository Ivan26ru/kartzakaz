<?php
/**
 * Левое меню автоматическое (leftmenu.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="col-md-2">
<?php
$args = array(
//'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => 3,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 1,//Скрывать ли термины в которых нет записей. 1(true) - скрывать пустые, 0(false) - показывать пустые.
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',//Максимальное количество элементов, которые будут получены. Лимит. По умолчанию - все.
 'orderby' => 'name',//Поле по которому сортировать результат
 'order' => 'ASC',//Направление сортировки, ASC или DESC
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true//Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий. По умолчанию подсчитываются только свои записи.
);

$catlist = get_categories($args); // получаем список рубрик
echo '<ul class="menu forplates list-unstyled width-js-2">';
foreach($catlist as $categories_item){//перебор рубрик



 // выводим название рубрики
 print '<li><a href="'. get_term_link($categories_item) .'">' . $categories_item->cat_name . '</a></li>';
 }
echo '</ul>';
 ?>
</div>

<div class="col-md-10">