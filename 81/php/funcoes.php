<?php
function carrega_pagina(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	if(file_exists('php/page_'.$pagina.'.php')):
		require_once('php/page_'.$pagina.'.php');
	else:
		require_once('php/page_home.php');
	endif;
}


function gera_titulos(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	switch ($pagina):
		case 'home':
			$titulo = 'PDVNET - Implantação';
			break;
		case 'adicionaldenuvem':
			$titulo = 'PDVNET - Adicional de nuvem';
			break;

		case 'configuracaoimpressora':
			$titulo = 'PDVNET - Configuração Impressora';
			break;

		case 'configuracaonfce':
			$titulo = 'PDVNET - Configuração NFC-e';
			break;

		case 'configuracaosat':
			$titulo = 'PDVNET - Configuração Sat';
			break;

		case 'configuracaorede':
			$titulo = 'PDVNET - Configuração Rede';
			break;

		case 'configuracaooualteracaodeetiqueta':
			$titulo = 'PDVNET - Configuração ou alteração de etiqueta';
			break;

		case 'desinstalacao':
			$titulo = 'PDVNET - Desinstalação';
			break;

		case 'instalacaomobile':
			$titulo = 'PDVNET - Instalação Mobile';
			break;
		case 'instalacaooupreinstalacao':
			$titulo = 'PDVNET - Instalação ou Pre-instalação';
			break;
		case 'integracaoecommerce':
			$titulo = 'PDVNET - Integração Ecommerce';
			break;
		case 'reinstalacao':
			$titulo = 'PDVNET - Reinstalação';
			break;
		case 'instalacao':
			$titulo = 'PDVNET - Instalação';
			break;
		
		default:
			$titulo = 'PDVNET - Instalação';
			break;
		endswitch;
		return $titulo;
	}

/* PRIMEIRO TESTE
$serveName = 'DESKTOP-L5PSONV\PDVNET';//"nomedocomputador/pdvnet"

$connectionInfo = array( "Database"=>"EVANDRO");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn) {
	echo "Connection established, <br/>";
} else {
	echo "Connection could not bbe established. <br/>";
	die (print_r(sqlsrv_erros(), true));
}*/

/**
 * 
 */

/* SEGUNDO TESTE
define('DB_HOST', "DESKTOP-L5PSONV\PDVNET");
define('DBUSER', "sa");
define('DBPASSWORD', "inter#system");
define('DBNAME', "EVANDRO");
define('DB_DRIVER', "sqlsrv");

class Conexao
{
	private static $connection;

	private function __construct(){}

	public static function getConnection(){
		$pdoConfig = DB_DRIVER . ":". "Server=" . DB_HOST . ";";
		$pdoConfig .= "Database" .DBNAME.";";

		try {
			if(!isset($connection)){
				$connection = new PDO($pdoConfig,DBUSER,DBPASSWORD);
				$connection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} return $connection;
			
		} catch (PDOException) {
			$mensagem = "Driver disponiveis: " . implode(",", PDO::getAvailableDrivers());
			$mensagem .= "/nErro: " . $e->getMessage();
			throw new Exception($mensagem);
		}
	}
}*/


/*
try {
	$Conexao = Conexao::getConnection();
	$query = $Conexao->query("SELECT ref_referencia from REFERENCIAS");
	$produto = $query->fetchAll();
} catch (Exception $e) { 
	echo $e->getMessage();
	exit;
}*/

// TERCEIRO TESTE
/*try {
	$pdo = new PDO("sqlsrv:dbname=EVANDRO;host=DESKTOP-L5PSONV\PDVNET","sa","inter#system");
} catch (PDOException $e) {
	echo "Erro com banco de dados: ".$e->getMessage();
} catch (Exception $e) {
	echo "Erro generico: ".$e->getMessage();;
}*/

/*
$serveName = 'DESKTOP-L5PSONV\PDVNET';//"nomedocomputador/pdvnet"

$connectionInfo = array( "Database"=>"EVANDRO","UID"=>"sa","PWD"=>"inter#system");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn) {
	echo "Connection established, <br/>";
} else {
	echo "Connection could not bbe established. <br/>";
	die (print_r(sqlsrv_erros(), true));
}*/
