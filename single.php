<?php
/**
* Single if\else Code legnum.info template for displaying single content.
*
*/

//Верстка записей определенной категории
if (in_category('8')) {//указываем ID рублики
include('single-poleznoe.php');//Если запись принадлежит этой рублики
} else {
include('single-all.php');//Остальныео записи
}

?>