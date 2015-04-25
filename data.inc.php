<?php
define('ERR_DRAW_ON_LEFT_MENU','sorry....menu doesn\'t work');
define('ERR_DRAW_ON_BOTTOM_MENU','sorry....menu doesn\'t work');
	/* Menu ***/
	$leftMenu = array(
		array('link' => 'Домой', 'href' => 'index.php'),
		array('link' => 'О нас', 'href' => 'index.php?id=about'),
		array('link' => 'Контакты', 'href' => 'index.php?id=contact'),
		array('link' => 'Таблица умножения', 'href' => 'index.php?id=table'),
		array('link' => 'Калькулятор', 'href' => 'index.php?id=calc')
	);
	/**** Menu */
	
	$hour = (int)strftime('%H');
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	

?>