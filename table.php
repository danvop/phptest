<?php
	require 'lib.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>������� ���������</title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- ������� ����� �������� -->
			<img src="logo.gif" width="187" height="29" alt="��� �������" class="logo" />
			<span class="slogan">��������� � ��� �������</span>
			<!-- ������� ����� �������� -->
		</div>

		<div id="content">
			<!-- ��������� -->
			<h1>������� ���������</h1>
			<!-- ��������� -->
			<!-- ������� ��������� �������� -->
			<form action=''>
				<label>���������� �������: </label><br />
				<input name='cols' type='text' value="" /><br />
				<label>���������� �����: </label><br />
				<input name='rows' type='text' value="" /><br />
				<label>����: </label><br />
				<input name='color' type='text' value="" /><br /><br />
				<input type='submit' value='�������' />
			</form>
			<!-- ������� -->
			
			<?php
			//table_print
			TablePrint(10,10);
			
			?>
			
			<!-- ������� -->
			<!-- ������� ��������� �������� -->
		</div>
		<div id="nav">
			<h2>��������� �� �����</h2>
			<!-- ���� -->
			<ul>
				<li><a href='index.php'>�����</a></li>
				<li><a href='about.php'>� ���</a></li>
				<li><a href='contact.php'>��������</a></li>
				<li><a href='table.php'>������� ���������</a></li>
				<li><a href='calc.php'>�����������</a></li>
			</ul>
			<!-- ���� -->
		</div>
		<div id="footer">
			<!-- ������ ����� �������� -->
			&copy; ����� ���� ���-������, 2000 - 2012
			<!-- ������ ����� �������� -->
		</div>
	</body>
</html>