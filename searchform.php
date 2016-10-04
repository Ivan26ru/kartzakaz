<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<div class="form-group">
		<!-- <label for="search-field">Поиск</label> -->
		<input type="search" class="form-control input-sm" id="search-field" placeholder="Строка для поиска" value="<?php echo get_search_query() ?>" name="s">
	</div>
	<button type="submit" class="btn btn-default">Искать</button>