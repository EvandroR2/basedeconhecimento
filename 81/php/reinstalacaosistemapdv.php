
<section>
	<div class="linha">
			<div class="coluna col11" >
	<section style="margin-left:40px;margin-right:40px">				
		<h1>1. Instalação Setup´s Básicos do sistema (SetupPdv,CrystalXI e etc...).</h1>
		<p>Para iniciar o processo de instalação do sistema, será necessário o instalador do sistema Pdvnet, para
		isso basta acessar o link abaixo e fazer o download do instalador, nesse <a href="https://drive.google.com/drive/folders/1sMpnobYxMIIX5O7uBYa0nMhpmg-QPfqR?usp=sharing">link</a> , fique atento para a versão,
		pois o instalador é constantemente atualizado, nesse guia usaremos a versão V230221 com o base.</p>
		<h2>1.1. Executar o PdvInstV230221.exe:</h2>

		<p>Basta avançar, avançar e finalizar.<br/>
		Após a execução, começaremos a instalar os executáveis responsáveis pelo funcionamento do sistema,<br/>
		eles se encontram na pasta RESTAURADORPDV, que se encontra padrão nesse diretorio, C:\pdv\RestauradorPdv\Instaladores:</p>
		<img src="img/instaladoresarquivos.jpg">
		<p>1.2. Executar o SetupPdv.exe<br/>
		Basta avançar, avançar e finalizar.<br/>
		1.3. Executar o SetupCRXI.exe<br/>
		Basta avançar, avançar e finalizar.<br/>
		1.4. Executar o NetFrameWork4.5.exe<br/>
		Basta avançar, avançar e finalizar. <br/>(Em alguns casos, o NetFrameWork4.5, já estará instalado,
		avance esta etapa caso isso ocorra )<br/>
		1.5. Executar o CRYSTAL DOTNET.exe (32bits)<br/>
		Basta avançar, avançar e finalizar.</p>
		<!--<p>Basta avançar, avançar e finalizar.</p>
		<p>1.5.1 Substituir a pasta win32_x86</p>
		<p>que se encontra no diretório C:\Program Files (x86)\SAP BusinessObjects\Crystal Reports for .NET
		Framework 4.0\Common\SAP BusinessObjects Enterprise XI 4.0, pela pasta win32_x86 que se encontra
		no diretório C:\RESTAURADOR PDV\CRYSTAL DOTNET\PASTA DE SUBISTUIÇÃO DO CRYSTAL. Logo após
		deveremos executar a bat (cr13.bat) como administrador, que se encontra no diretório C:\Program Files
		(x86)\SAP BusinessObjects\Crystal Reports for .NET Framework 4.0\Common\SAP BusinessObjects
		Enterprise XI 4.0\win32_x86, após a execução da bat o cmd apresentará a seguinte mensagem:</p>-->
		<h3>Legendas</h3>
		<ul>
		<li>SetupPDV = instala e registra as DLL’s necessárias para a configuração do sistema</li>
		<li>SetupCRXI = responsável pela leitura dos relatórios do sistema</li>
		<li>CrystalDotNet = responsável pela leitura e impressão da NFC-e nas lojas</li>
		<li>NetFramework4.5 = Necessário para instalação do CrystalDotNet e visualização do sistema</li>
		<li>SQL = Programa responsável por gerenciar o banco de dados</li>
		<li>SqlBakSetupAzure= Responsavel pelo BACKUP do banco de dados</li>
		<li>Qualquer arquivo do tipo .bat = Serve para enviar um conjunto de comandos(instruções) para o Windows.</li>
		<li>InstalaPDV.bat = Comando criado em DOS para registro de DLL necessária na impressão de NFC-E.</li>
		</ul>	
		<h2>2. Instaçãodo SQL 2014.</h2>
		<p>Para iniciar o processo de instalação do SQL, será necessário o instalador do SQL2014, para isso basta
		acessar o link abaixo e fazer o download do instalador, nesse <a href="https://drive.google.com/file/d/0B5FW9X50-Tp4U2hhNDNzY2ZHazA/view?usp=sharing">link</a> . (extraia o arquivo de instalação para a
		pasta C:\RESTAURADORPDV\Instaladores).</p>
		<h3>2.1.Executar o SQLEXPRADV_x86_PTB.exe:</h3>
		<p>Ao executar o instalar do SQL serão apresentada as seguintes opções:</p>
			<img src="img/sqlpt01.jpg">
		<p>Clique na opção, marcada acima e será apresenta a seguinte tela:</p>
			<img src="img/sqlpt111.jpg">
		<p>Clique em avançar, clique em avançar novamente, clique em aceito os termos e avançar como mostra a
		imagem abaixo:</p>
		<img src="img/sqlpt03.jpg">
		<p>Clique em avançar novamente, até chegar nessa tela:</p>
			<img src="img/sqlpt04.jpg">
		<p>Marque a opção Instância nomeada, e escreva (PDVNET), como mostra a imagem acima, logo após
		clique em avançar, será apresentada a seguinte tela:</p>
		<img src="img/sqlpt4.jpg">
		<p>Ir na Aba agrupamento,</p>
		<img src="img/sqlpt5.jpg">
		<p>Desmarcar a opção diferenciar acento, ao desmarcar esta opção o agrupamento ficará da seguinte
		forma:</p>
		<img src="img/sqlpt6.jpg">
		<p>Verifique se as opções marcadas na foto acima estão atribuídas como Automática, caso não estejam
		mude sempre para Automática e após clique em avançar.</p>
		<img src="img/sqlpt15.jpg">
		<p>Como vemos acima, devemos marcar a opção Modo misto, digitar a senha padrão do sistema que é
		inter#system, se o SQL acusar baixa complexidade de senha, devemos utilizar a senha inter#SYSTEM,
		(NUNCA PASSE ESSAS SENHAS PARA ALGUEM).</p>

		<img src="img/sqlpt16.jpg">
		<p>Selecionar a aba Diretório de Dados e em Diretório de banco de dados de usuário, precisa estar com a pasta BaseSQL selecionada.</p>
		<img src="img/sqlpt9.jpg">
		<p>Logo após clique em avançar e depois clicar em instalar
		e configurar, depois avançar e aguardar o fim da instalação.</p>
		<img src="img/sqlpt08.jpg">
		<p>Parabéns o SQL foi instalado com sucesso.</p>

		<h2>Restaurar o banco de dados extensão .bak</h2>
		<p>Após a instalação do sistema, deveremos realizar a restauração ou anexo do backup do banco de dados Dar acesso total nas pastas basesql e pdv >> configurar o sistema no PDVECF.</p>
		<img src="img/sqlpt10.jpg">
		
		<p>Com a opção Dispositivo marcada, basta clicar nos “...” e selecionar o banco de dados a ser restaurado. Lembrando que a extensão precisar ser .bak</p>

		
		<img src="img/sqlpt11.jpg">
		<p>Alterar o nome do banco (NOMEDOCLIENTE+CODIGODOSUPORTE). </p>

		<img src="img/sqlpt12.jpg">
		
		
		<p>Quando houver uma reinstalação sem backup, deverá ser restaurado um banco de dados ZERADO no SQL SERVER.</p>
		
		<p>Será necessário conectar-se na máquina RETAGUARDA do cliente, para obter os dados.</p>

		<p>Incluir no banco de dados, na tabela dbo.filial o número da filial e na dbo.registros</p>
		 
		 <img src="img/tabelaregistrotransferencia.jpg"> 

		<p>Receber dados de forma Integral pelo PDV Sync Plus</p>

		<p>Na reinstalação sem backup sempre informar ao cliente que ele perderá o histórico de vendas na loja, e só conseguirá acessar na RETAGUARDA.</p>
	</section>
	</div>
	</div>
	</div>
</section>