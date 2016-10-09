<?php
/**
 * Запись в цикле картриджей (loop-kart.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
			<tr>
				<!-- <td><?php echo $n_post; //номер попорядку?></td> -->
				<td><a href="<?php the_permalink(); //ссылка на пост?>"><?php the_title(); //имя поста?></a></td>
				<td><?php echo get_field('printer'); //принтер?></td>
				<td><?php echo get_field('cena'); //цена?> руб.</td>
			</tr>