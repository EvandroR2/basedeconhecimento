<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso em video</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/estiloframe.css" />
<style type="text/css">
		body {
			font-size: 10pt;
			font-family: Arial;
		}
		p {
			text-align: justify;
			text-indent: 20px;
		}
		article h1 {
			font-size: 15pt;
			color: #ffffff;
			background-color: rgba(0,0,0, .3);
			padding: 5px;
			margin: 0px;
		}
		article h2 {
			font-size: 13pt;
			color: #888888;
			margin: 0px;
		}
		article {
			margin-bottom: 800px;
		}

		img.img-dir {
			display: block;
			float: right;
			margin-left: 5px;
		}
	</style>

	</head>
<body>
	<article>
		<div id="linha">
			<div class="coluna col3" >
				<form>
				<h3>Qual tabela ?</h3>
		    	<select name="Exames" onChange="abrir.location = options[selectedIndex].value">
		        <option label="Selecione sua opção" value="0"></option>
		        <option value="php/frametabelaapresentacaofev.php#instalacaotable">Instalação</option>
		        <option value="php/frametabelaapresentacaofev.php#servicotable">Serviço</option>
		        <option value="php/frametabelaapresentacaofev.php#configuracaotable">Configuração</option>
		        <option value="php/frametabelaapresentacaofev.php#cancelamentotable">Cancelamento</option>
		        <option value="php/frametabelaapresentacaofev.php#cortesiatable">Cortesia</option>
		    	</select>
				</form>
				<BR>
				
			</div>
		</div>
	</article>
	<section>
		<div class="coluna col4">
		<iframe name="abrir" scrolling="no" src="" id="frame-spec"></iframe>
		</div>
	</section>
</body>
</html>