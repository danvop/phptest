<?
$output = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$n1 = (int)$_POST['num1'];
	$n2 = (int)$_POST['num2'];
	$op = cleanStr($_POST['operator']);
	
	$output = "$n1 $op $n2 = ";
	switch($op){
		case '+': $output .= $n1 + $n2; break;
		case '-': $output .= $n1 - $n2; break;
		case '*': case '+': $output .= $n1 + $n2; break;
		case '/': 
			if ($n2 === 0)
				$output = '������� �� 0 ���������';
			else
				$output .= $n1 / $n2; 
			break;
		default: $output = "����������� �������� '$op'";
	}
}
if ($output)
	echo "<h3>���������: $output</h3>";
?>
			<form action='' method='post'>
				<label>����� 1:</label><br />
				<input name='num1' type='text'/><br />
				<label>��������: </label><br />
				<input name='operator' type='text'/><br />
				<label>����� 2: </label><br />
				<input name='num2' type='text'/><br /><br />
				<input type='submit' value='�������'>
			</form>	
			