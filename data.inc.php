<?php
define('ERR_DRAW_ON_LEFT_MENU','sorry....menu doesn\'t work');
define('ERR_DRAW_ON_BOTTOM_MENU','sorry....menu doesn\'t work');
	/* Menu ***/
	$leftMenu = array(
		array('link' => 'Домой', 'href' => 'index.php'),
		array('link' => 'О нас', 'href' => 'about.php'),
		array('link' => 'Контакты', 'href' => 'contact.php'),
		array('link' => 'Таблица умножения', 'href' => 'table.php'),
		array('link' => 'Калькулятор', 'href' => 'calc.php')
	);
	/**** Menu */
	
	$hour = (int)strftime('%H');
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	

?>