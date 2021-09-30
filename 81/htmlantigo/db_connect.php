<?php
//conexao com banco de dados
$servename = "meajudavandin.mysql.dbaas.com.br";
$usarname = "meajudavandin" ;
$password = "A!b2c3d4" ;
$db_name = "meajudavandin" ;

$conexao = mysqli_connect ($servename, $usarname, $password, $db_name) ;

if (mysqli_connect_error ()):
echo "Falha na CONEXAO: " .mysqli_connect_error();
endif;
?>