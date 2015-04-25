<?php
define('ERR_DRAW_ON_LEFT_MENU','sorry....menu doesn\'t work');
define('ERR_DRAW_ON_BOTTOM_MENU','sorry....menu doesn\'t work');
$hour = (int)strftime('%H');

$welcome = '';
if($hour > 0 and $hour < 6)
	$welcome = 'Доброй ночи';
elseif($hour >= 6 and $hour < 12)
	$welcome = 'Доброе утро';
elseif($hour >= 12 and $hour < 18)
	$welcome = 'Добрый день';
elseif($hour >= 18 and $hour < 23)
	$welcome = 'Добрый вечер';
else
	$welcome = 'Доброй ночи';


	/* Menu ***/
	$leftMenu = array(
		array('link' => 'Домой', 'href' => 'index.php'),
		array('link' => 'О нас', 'href' => 'index.php?id=about'),
		array('link' => 'Контакты', 'href' => 'index.php?id=contact'),
		array('link' => 'Таблица умножения', 'href' => 'index.php?id=table'),
		array('link' => 'Калькулятор', 'href' => 'index.php?id=calc')
	);
	/**** Menu */
	
	
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	

?>