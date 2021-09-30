<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilofonteeimg.css">
	<meta charset="utf-8"/>
	<title> Curso em video</title>
</head>
<body>
	<?php
	$n = isset($_GET["num"])? $_GET["num"]:0;
	$o = isset($_GET["oper"])? $_GET["oper"]:1;
	switch ($o) {
		case 1:
			$r = $n *2;
			break;
		case 2:
			$r = $n ^3;
			break;
		case 3:
			$r = sqrt($n); // $n ^ (1/2)
			
	}
	echo "O resultado da operação solicitada foi $r";


	?>
	<br/>

	<a href="questao8teste.html">Voltar</a>

</body>
</html>