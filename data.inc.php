<?php
	
	/* Menu ***/
	$leftMenu = array(
		array('link' => '�����', 'href' => 'index.php'),
		array('link' => '� ���', 'href' => 'about.php'),
		array('link' => '��������', 'href' => 'contact.php'),
		array('link' => '������� ���������', 'href' => 'table.php'),
		array('link' => '�����������', 'href' => 'calc.php')
	);
	/**** Menu */
	
	$hour = (int)strftime('%H');
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	

?>