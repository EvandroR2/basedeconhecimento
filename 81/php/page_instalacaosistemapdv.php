
<section>
	<div class="linha">
			<div class="coluna col11" >
								
	<h1>1. Instalação Setup´s Básicos do sistema (SetupPdv,CrystalXI e etc...).</h1>
		<p>Para iniciar o processo de instalação do sistema, será necessário o instalador do sistema Pdvnet, para
		isso basta acessar o link abaixo e fazer o download do instalador, nesse link, fique atento para a versão,
		pois o instalador é constantemente atualizado, nesse guia usaremos a versão 10.0 comobase.</p>
	<h2>1.1. Executar o PDV10.exe:</h2>
		<p>Basta avançar, avançar e finalizar.<br\>
		Após a execução, começaremos a instalar os executáveis responsáveis pelo funcionamento do sistema,<br\>
		eles se encontram na pasta RESTAURADORPDV, o Windows apresentará a seguinte configuração de<br\>
		pastasno disco local C:</p>
	<h3>1.2. Executar o SetupPdv.exe</h3>
		<p>Basta avançar, avançar e finalizar.</p>
	<h3>1.3. Executar o SetupCRXI.exe</h3>
		<p>Basta avançar, avançar e finalizar.</p>
	<h3>1.4. Executar o NetFrameWork4.5.exe</h3>
		<p>Basta avançar, avançar e finalizar. (Em alguns casos, o NetFrameWork4.5, já estará instalado,</p>
		<p>avance esta etapa caso isso ocorra )</p>
	<h3>1.5. Executar o CRYSTAL DOTNET.exe (32bits)</h3>
		<p>Basta avançar, avançar e finalizar.</p>
	<h3>1.5.1 Substituir a pasta win32_x86</h3>
		<p>que se encontra no diretório C:\Program Files (x86)\SAP BusinessObjects\Crystal Reports for .NET
		Framework 4.0\Common\SAP BusinessObjects Enterprise XI 4.0, pela pasta win32_x86 que se encontra
		no diretório C:\RESTAURADOR PDV\CRYSTAL DOTNET\PASTA DE SUBISTUIÇÃO DO CRYSTAL. Logo após
		deveremos executar a bat (cr13.bat) como administrador, que se encontra no diretório C:\Program Files
		(x86)\SAP BusinessObjects\Crystal Reports for .NET Framework 4.0\Common\SAP BusinessObjects
		Enterprise XI 4.0\win32_x86, após a execução da bat o cmd apresentará a seguinte mensagem:</p>
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
		acessar o link abaixo e fazer o download do instalador, nesse link. (extraia o arquivo de instalação para a
		pasta C:\RESTAURADORPDV\Instaladores).</p>
		<h3>2.1.Executar o SQLEXPRADV_x86_PTB.exe:</h3>
		<p>Ao executar o instalar do SQL serão apresentada as seguintes opções:
		Clique na opção, marcada acima e será apresenta a seguinte tela:
		Clique em avançar, clique em avançar novamente, clique em aceito os termos e avançar como mostra a
		imagem abaixo:</p>
		<p>Clique em avançar novamente, até chegar nessa tela:<br\>
		Marque a opção Instância nomeada, e escreva (PDVNET), como mostra a imagem acima, logo após
		clique em avançar, será apresentada a seguinte tela:</p>
		<p>Ir na Aba agrupamento,<br\>
		desmarcar a opção diferenciar<br\>
		acento, ao desmarcar esta opção<br\>
		o agrupamento ficará da seguinte<br\>
		forma:<br\>
		Verifique se as opções marcadas na foto acima estão atribuídas como Automática, caso não estejam
		mude sempre para Automática e após clique em avançar.<br\>
		Como vemos acima, devemos marcar a opção Modo misto, digitar a senha padrão do sistema que é
		inter#system, se o SQL acusar baixa complexidade de senha, devemos utilizar a senha inter#SYSTEM,
		(NUNCA PASSE ESSAS SENHAS PARA ALGUEM).Logo após clique em avançar e depois clicar em instalar
		e configurar, depois avançar e aguardar o fim da instalação.<br\>
		<p>Parabéns o SQL foi instalado com sucesso.</p>

<!--agendareinstalacao.php-->
							</div>
						</div>
					</div>
</section>