<section>
	<div class="linha">
		<div class="coluna col12">
			<h1>Processo tecnico para o sistema</h1>

			<h2>Instalação de Banco de dados em nuvem</h2>

			<p>A hospedagem do banco ela é feita remotamente, podem existir dois momentos para fazer uma hospedagem, o primeiro pode ser no momento de uma instalação do retaguarda quando o cliente ja entra com contrato de hospedagem, o outro momento é quando o cliente tem o banco local e solicita no comercial a hospedagem.
			</p>
			<p>O cliente quando ja entra com a hospedagem em contrato, ja devemos fazer essa hospedagem no dia da pré instalação do retaguarda.				
			</p>
			<p>Quando o cliente faz a solicitação para a hospedagem, devemos informar o cliente que ele vai ficar sem sistema no momento em que iniciar o backup para hospedar o banco.<br/>
			O tecnico deve verificar se existe computadores usando o sistema no momento em que iniciar a fazer o backup, no momento em que finalizar o backup, para a instancia, e realocar o .MDF para uma pasta backup para evitar problemas.</p>

			<p>A etapas que devemos seguir para a hospedagem:</p>
				<p>fazer contato com o cliente e informar como que vai ser o processo:<br/>
				Vai ser feito o backup e parar o sistema ate finalizar a hospedagem.<br/>
				Quando finalizar a hospedagem, vai ser preciso conectar computador a computador que usa o sistema para configurar o apontamento do sistema.<br/>
				Caso não tenha acesso a todos os computadores, o cliente deve fazer contato com a "Agenda" para agendar os outros computadores.<br/>
				O sistema quando configurado e tiver outros computadores a serem configurados ou quando for formatado o computador que ja tinha o apontamento feito, deve  fazer contato com a "Agenda" para agendar o serviço "configuração de adicional de nuvem".</p>
				<p>Conectar com o cliente no horario agendado no servidor do Sistema PDVNET.<br/>
					Fazer o backup do sistema, para a instancia, realocar o arquivo .MDF para outra pasta.<br/>
					Fazer uma manutenção no banco do cliente para diminuir o LOG e o tamanho do banco.<br/>
					Pode ser feito um SHIRINK no SQL<br/>
					<BR/>
					<img src="">
					Tambem pode rodar o comando para reduzir o log para 1kb<br/>
					<BR/>
			</div>
			<div class="coluna col12">
			
					<figure class="foto-legenda col7">
					<img src="img/hospedagem/comandoreduzir.jpg">
					<p style="text-align: left;">ALTER DATABASE NOMEDOBANCO SET RECOVERY SIMPLE<br/>
					 use NOMEDOBANCO<br/>
					 sp_helpfile<br/>
					 DBCC SHRINKFILE (NOMEDOBANCOREAL_log, 1)<br/>
					 USE master<br/>
					 ALTER DATABASE NOMEDOBANCO SET RECOVERY full</p>
					</figure>
					<br/>
				</div>
			<div class="coluna col12">

					<p>Depois de reduzir o banco de dados, podemos fazer o backup (.bak), zipar e subir o banco para um cloud, gerar um link e enviar para a agenda pode responder o e-mail com a solicitação da hospedagem com o link no corpo do e-mail, deve ser enviado com copia para <a href="mailto:douglas@pdvnet.com.br"/>douglas@pdvnet.com.br</a>, e para o <a href="mailto:implantacaosetor@pdvnet.com.br"/>setorimplantacao@pdvnet.com.br</a>.<br/>
					O tecnico intermediario que estiver no horario, vai fazer o acesso no azure e fazer a hospedagem.</p>

					<p>Depois que o processo da hospedagem estiver concluido, o tecnico intermediario vai responder o e-mail dizendo que a hospedagem foi concluida e pode seguir com a implantação.</p>
					<p>O tecnico vai configurar o sistema no cliente novamente, e fazer alguns testes antes de liberar.</p>

						<p>Abrir o sistema e "Criar Trigger"<br/>
						pedir o cliente para logar no sistema<br/>
						cadastrar um produto ou alterar alguma informação no cadastro do produto.</p>
					<p>Configurar o PDVSYNCPLUS, caso ja esteja configurado localmente, configurar para o novo webservice.<br/>
					Não esquecer de verificar se a loja esta conseguindo se comunicar com a MATRIZ.</p>
		</div>
		<div class="coluna col12">
			<h1>Configurar a HOSPEDAGEM no AZURE</h1>

			<div style="padding-left: 220px;">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/B-W5cACEt40?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<p>Vamos conectar na area remota, azure2.pdvnet.com.br, usuario **** e a senha ****, lembre que nesse ambiente vai estar todos os bancos de dados do cliente, nunca passe seu usuarie e senha para outra pessoa.</p>
				<img style="padding-left: 220px;" src="img/hospedagem/conexaodearearemota.jpg" >

			<p>Agora vamos dentro da area remota, acessa o browser e baixar os arquivos que estão no cloud, vamos colocar esses arquivos no diretorio, "E:\BASESQL\PASTACOMNOMEDOCLIENTE", extrair do arquivo zipado, depois de  extrair, lembrar de apagar o arquivo .rar para não deixar nada desnecessário nas pastas.</p>

			<img src="img/hospedagem/diretoriobasesql.jpg">

			<p>Podemos agora entrar no studio SQL, para poder restaurar o banco de dados.<br/>
				Instancia servidor\clientes<br/>
				usuario *********<br/>
				senha *******<br/>
			</p>

			<img style="padding-left: 220px;" src="img/hospedagem/caixadeloginstudiosql.jpg">

			<p>Seguir o padrão da empresa ao restaurar o banco de dados, *NOME DO BANCO sempre NOME DO CLIENTE<br/>
				devemos se atentar que ao restaurar o backup, o sql vai procurar o caminho do diretorio c:\basesql, mas nesse caso, devemos reconfigurar o diretorio para o caminho "E:\BASESQL\PASTACOMNOMEDOCLIENTE", quando selecionar o arquivo .bak, coloque a nomeclatura padrão do nome do banco, vá em files, marque o checkbox "Relocate all files to folder", habilitando essa opção, podemos mudar o diretorio.
			</p>

			<img src="img/hospedagem/caminhoaorestaurar.jpg">

			<p>Depois de restaurar os dois bancos de dados, precisamos criar os usuarios para acesso no banco de dados, vamos em security >> login >> new login.<br/>
				colocar o usuario igual ao nome do banco<br/>
				a senha deve ser gerado pelo site em <a href="https://www.geradordesenha.com.br" target="_blank"> geradordesenha.com.br</a>, lembre que devemos colocar nas configurações para gerar a senha com tamanho 8, marca a opção de primeira letra maiuscula e tambem marcar as opções maiusculo,minusculo e numeral.</p>

				<p>Agora podemos colocar a senha e desmarcamos a opção "Impor politica de senha", na parte de baixo, configuramos para o banco padrão com o banco do cliente, idioma "Brazilian"</p>

				<img src="img/hospedagem/loginbancopt1.jpg">

				<p>Ainda na parte de usuarios, vamos em "Mapeamento de usuarios", no grid aonde podemos da acesso em qual banco o usuario pode mexer, vamos marca somente os 2 banco de dados do cliente.<br/>
					E no grid que marcamos a associação de função de usuarios, vamos marca 2 opções, "public" e "db_owner"
				 </p>

				 <img src="img/hospedagem/loginbancopt2.jpg">

				 <p>Quando tiver ja o banco restaurado, usuario criado e apontado para o banco do cliente, vamos rodar o comando "Trigger".				 	
				 </p>

				<p>use master<br/>
				Alter database NOMEDOBANCO set trustworthy on<br/>
				use NOMEDOBANCO <br/>				 
				exec sp_changedbowner 'sa'	<br/>				 
				Alter database NOMEDOBANCO_AUXILIAR set trustworthy on<br/>
				use NOMEDOBANCO_AUXILIAR <br/>				 
				exec sp_changedbowner 'sa'</p>

				<p>Podemos agora fechar o SQL, e vamos configurar o backup automatico do banco de dados, vamos usar o programa "SQL Backup Master", o icone esta na area de trabalho, só executar o programa, o programa de backup esta configurado em armazenar com uma lista de "A a Z", então vamos selecionar a letra que inicia o nome do cliente para configurar o banco de dados, vai aparecer a lista de bancos de dados configurado e selecionamos os bancos de dados que acabamos de restaurar.</p>

				<p>Podemos agora dentro do suporte.exe configurar o sistema parar quando apontar o codigo na configuração do PDV.ini o sistema ja carregar as informações.<br/>
					Vamos abrir o suporte.exe >> cadastro geral >> Banco de dados</p>

					<figure class="foto-legenda col9">
					<img src="img/hospedagem/configuracaosuporteazure.jpg">	
					</figure>
					

				<p>Preencher os dados e marca somente o codigo da matriz para carregar a informação no PDV.INI<br/>
				Quando terminar de configurar, deve testar na sua maquina e gerar o config. "não apague a pasta do config que vamos precisar mais pra frente."</p>

				<p>Voltamos a area remota do azure2, e agora temos que criar a estrutura de pasta pdv para configurar o webservice do cliente, para o funcionamento do aplicativo do board e para o pdvsyncplus.

				No diretorio c:\pdv, vamos copiar uma pasta que se chama "_pdvpadrao" e colar ela nesse mesmo diretorio, e renomear a pasta para o "NOME DO CLIENTE", essa pasta "_pdvpadrao" ela tem todas as DLL's e tambem ja tem configurado o "PDVAPI".

				dentro da pasta que criamos com o nome do cliente, temos que colocar o PDV.INI e o BASE.INI que fizemos no nosso computador para testar o sistema.

				Agora vai abrir o arquivo BASE.INI, na na linha 02 = vamos trocar a informação da instancia que foi gerado para colocar a instancia como local SERVIDOR\CLIENTES.
				</p>

				<p>Crie a pasta "VIRTUAL" dentro da pasta "c:\pdv\NOMEDOCLIENTE\web\pdvapi"</p>

				<p>Acesse o site do 
					<a href="https://painel-dns2.locaweb.com.br/dns_zones/pdvnet.com.br/dns_entries?ticket=ST-1327762-6CpImWkDVyRRo1CvRr-K6QpFZPAnina-node3">LOCALWEB</a>, e vamos ter que criar um DOMINIO com o padrão da PDVNET, nomedocliente.pdvnet.com.br</p>

					<figure class="foto-legenda col4">
					<img src="img/hospedagem/incluirdns.jpg">
					</figure>
					<p>Aqui voce vai incluir DNS</p>

					<figure class="foto-legenda col6">
					<img src="img/hospedagem/incluirdns1.jpg">
					</figure>
					<p>"nomedocliente" no campo entrada e no campo conteudo "104.41.61.15" do azure2</p>

			

				

				<p>Depois de criar um dominio, podemos agora configurar o IIS, para configurar o API do cliente, devemos criar primeiro um diretorio virtual ate a pasta PDVAPI, e na pasta PDVAPI convertemos em aplicativo.</p>

				<p>Pode ser que as DLL's estejam desatualizada da pasta, então devemos testar para ver se o WEBSERVICE esta ok. caso não esteja, no seu computador, configure o ambiente do cliente, atualize o sistema "PDVUP", verifique se existe alguma DLL nova ou com uma data maior do que a pasta "_pdvpadrao" tem, dessa forma, assim que voce atualizar na estrutura que esta dando erro, voce deve tambem atualizar a pasta "_pdvpadrao", para as proximas não ter o mesmo problema.</p>

				<h1>FIM</h1>

			</p>
		</div>
			
		</div>
	</section>