<?php
define('ERR_DRAW_ON_LEFT_MENU','sorry....menu doesn\'t work');
define('ERR_DRAW_ON_BOTTOM_MENU','sorry....menu doesn\'t work');
$hour = (int)strftime('%H');

$welcome = '';
if($hour > 0 and $hour < 6)
	$welcome = '������ ����';
elseif($hour >= 6 and $hour < 12)
	$welcome = '������ ����';
elseif($hour >= 12 and $hour < 18)
	$welcome = '������ ����';
elseif($hour >= 18 and $hour < 23)
	$welcome = '������ �����';
else
	$welcome = '������ ����';


	/* Menu ***/
	$leftMenu = array(
		array('link' => '�����', 'href' => 'index.php'),
		array('link' => '� ���', 'href' => 'index.php?id=about'),
		array('link' => '��������', 'href' => 'index.php?id=contact'),
		array('link' => '������� ���������', 'href' => 'index.php?id=table'),
		array('link' => '�����������', 'href' => 'index.php?id=calc')
	);
	/**** Menu */
	
	
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	

?>