<div class="linha">
	<div class="coluna col11" >
		<section style="margin-left: 40px;margin-right: 40px">
			<h1>Configuração para o pdvsyncplus</h1>
			<h2>Processo Tecnico com o cliente</h2>
		<p>O pdvsyncplus é uma ferramenta que conecta via webservice, para isso, a comunicação vai ser feita diretamente por "API", para a api funcionar, devemos instalar o IIS, e configurar um aplicativo dentro do IIS chamado "pdvapi", aonde o caminho desse aplicativo é c:\pdv\web\pdvapi, por padrão.</p>
		<p>Quando o pdvsyncplus é configurado ele é preciso ser acessivel externamente, quando isso não é possivel, vamos instalar uma VPN aonde não vamos precisar deixar o computador do cliente vulneravel. Essa VPN é feita por um programa chamado "RADMIN", é uma programa gratuito</p>
		<p style="color: red;">O cliente quando tem o banco hospedado no AZURE, não precisamos fazer configurações porque ja temos esse processo pronto dentro do azure, então apenas ativamos o pdvsyncplus no codigo da loja.</p>
	</div>

		<div class="coluna col11" >
			<h2>Usuario IIS_IUSRS</h2>
			<!--<div class="coluna col4" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/pastaseguranca1.jpg">
				</figure>
			</div>-->
			<div class="coluna col5" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/pastaseguranca2.jpg">
				</figure>
			</div>
			<div class="coluna col5" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/pastaseguranca3.jpg">
				</figure>
			</div>

			<div class="coluna col11" >
				<p>na pasta da pdvnet, devemos incluir um usuario chamados IIS_IUSRS, então vá na propriedade da pasta, na aba segurança, editar e digite exatamente esse nome de usuario "IIS_IUSRS", clique no botão verificar nomes e voce agora sendo localizado de todas as permissões e de ok.</p>
			</div>
		</div>

		<div class="coluna col11" >
			<h2>Pasta Virtual</h2>
			<div class="coluna col5" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/mklink.jpg">
				</figure>
			</div>
			<div class="coluna col5" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/virtual.jpg">
				</figure>
			</div>

			<div class="coluna col11" >
				
				<p>A pasta virtual é um diretorio simbolico, criado para acessar a pasta c:\PDV, então voce tem que criar essa pasta aonde o aplicativo PDVAPI é feito, no diretorio c:\pdv\web\pdvapi, vamos criar a pasta chamada virtual que é um link para acessar a pasta PDV.<br/>
					Então entre no CMD como administrador, e como primeiro comando vamos acessar a pasta do pdvapi, então digite: cd c:\pdv\web\pdvapi e aperte o ENTER, pronto acessamos a pasta.
					agora vamos digitar o proximo comando, então digite MKLINK /d "virtual" "c:\pdv\" e aperte o ENTER.<br/>
					vai aparecer a seguinte mensagem no CMD "Link simbólico criado para virtual <<===>> c:\pdv\"
				</p>
			</div>
		</div>

		<div class="coluna col11">
			<h2>Adicionar o recurso IIS</h2>
			<div class="coluna col5" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/ativadoriis.jpg">
				</figure>
			</div>

			<div class="coluna col6">
				<p>Vamos agora instalar o IIS, esse recurso é instalado pelo windows, então vamos em Painel de Controle >> Programas >> Ativar ou desativar recursos do windows<br/>
				E comece a marcar os checkbox como mostra a imagem e as intruções abaixo.</p>
				<ul style="color: #000000;">
				<li>&#10004; Serviços de Informações da Internet</li>
				<ul style="font-size: 10pt">
					<li>&#9635; Ferramentas de gerenciamento da web</li>
					<ul>
						<li>&#9634; Compatibilidade com gerenciamento de IIS 6</li>
						<ul>
							<li>&#9634;Compatibilidade com Metabase do IIS e configurações do IIS 6</li>
							<li>&#9634;Compatibilidade com WMI do IIS 6 </li>
							<li>&#9634;Console de gerenciamento do IIS 6</li>
							<li>&#9634;Ferramenta de Scripts ddo IIS 6</li>					
						</ul>
						<li>&#10004; Console de gerenciamento de IIS</li>
						<li>&#10004; Scripts e ferramentas de gerenciamento do IIS</li>
						<li>&#10004; Serviços de gerenciamento de IIS</li>
					</ul>
						<li>&#9635; Serviços da World wide Web</li>
					<ul>
						<li>&#10004; Manutenção de Diagnosticos</li>
						<li>&#10004; Recursos e Desempenhos</li>
						<li>&#10004; Recursos e desenvolvimento de aplicativos</li>
						<li>&#10004; Recusros de HTTP comuns</li>
					</ul>
					<li>&#9635; Segurança</li>
					<ul>
						<li>&#10004; Filtragem de Solicitações</li>
					</ul>
				</ul>
			</div>

			<div class="coluna col11">
				<hr>
				<p>Os que estão com o simbolo &#10004; que dizer que dessa forma entende que tudo que estiver dentro deve ser marcado.<br/>
				Os que estão com o simbolo &#9635; que dizer que dessa forma entende que  nem todos que estiver dentro estão marcado.<br/>
				Os que estão com o simbolo &#9634; que dizer que dessa forma entende que não pode marcar.</p>
			</div>
		</div>

		<div class="coluna col11">
			<h2>Configurando o Console IIS</h2>
			<div class="coluna col5" >
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/configuracaopdvapi.jpg">
				</figure>
			</div>

			<div class="coluna col6">
				<p>O Console de IIS é aonde vamos adicionar o aplicativo que chamamos de PDVAPI, para que o webservice funcione, então procure no Windows o programa chamado "Gerenciador do Serviços de Informações da Internet (IIS)", ou va nesse diretorio para abrir o programa "C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Administrative Tools".<br/>
					No console vamos procurar pelo "Defaut Web Site", e vamos clicar com botão direito e vamos em adicionar aplicativo<br/>
					No Campo ALIAS, vamos preencher com o nome PDVAPI<br/>
					No Campo Pool de aplicativo vamos selecionar o ".NET4.5", caso não apareça nenhum, voce deve instalar essa função.</p>

					<p>Para instalar a função entre no CMD como administrador e digite exatamente dessa forma<br/>
					<span style="font-size: 9pt;">"C:\Windows\Microsoft.NET\Framework\v4.0.30319\aspnet_regiis.exe -i"</span></p>
				<p>Agora no diretorio vamos colocar o caminho da pasta PDVAPI, "c:\pdv\web\pdvapi" e confirme e o IIS vai estar pronto.</p>
			</div>
		</div>

		<div class="coluna col11">
			<h3 style="font-size: 18pt;">Fazendo o teste final:</h3>
			<div class="coluna col4">
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/iisapilocalhost.jpg">
				</figure>
			</div>

			<div class="coluna col6">
				<p>Faça um teste voce mesmo para verificar se esta funcionando, abra um browser (navegador de internet) e digite http://localhost/pdvapi, como mostra a imagem o navegar vai aparecer dessa forma, caso o servidor esteja com alguma porta diferente da 80 que é uma porta padrão, deve incluir no browser essa informação da porta dessa forma, http://localhost:60000/pdvapi.</p>
			</div>

			<div class="coluna col10">
				<p>Ok, agora entenda que o caminho "LOCALHOST" é o caminho do ip que o servidor esta usando, aonde chamamos de "WEBSERVICE", podemos mudar essa informação para o ip do servidor, como por exemplo: http://192.168.0.10/pdvapi, aqui estou colocando como se o ip do servidor fosse esse e vai funcionar do mesmo modo, devemos entender esse principio, para que esse "LOCALHOST" seja substituido tanto pelo "DNS", "IP", "127.0.0.1", "LOCALHOST", e tambem podemos instalar programas que criam redes e tambem geram IP para o servidor que tambem é acessado do mesmo modo, usamos atualmente o programa RADMIN, ele é um programa simples aonde cria rede e cada computador recebe um IP para trabalhar, desse modo, podemos acessar o da mesma maneira, por EX: http://26.253.98.232/pdvapi, agora que ja entendeu essa questão do LOCALHOST, esse caminho deve ser cadastrado no suporte, aonde vinculamos CLIENTE e seu WEBSERVICE, para que o PROGRAMA PDVSYNCPLUS.exe saiba qual webservice deve procurar.</p>
				<p style="color: red;">NOTA: o webservice que vai ser cadastrado nunca pode ser o LOCALHOST, 127.0.0.1, porque são IPS que olham para sua própria maquina, então esse IP's são para teste no servidor para verificar se esta funcionando.</p>
				<p>A loja no brownser deve conseguir acessar o WEBSERVICE tambem, verifique qual WEBSERVICE que esta cadastrado no cliente e teste o mesmo webservice na loja. </p>
			</div>
		</div>
			
		<div class="coluna col11">
			<h1>RADMIN</h1>
			<div class="coluna col4">
				<figure class="foto-legenda">
					<img src="img/pdvsyncplus/Radmin-VPN-for-Windows-10_Image3.jpg">
				</figure>
			</div>

			<div class="coluna col7">
				<h3>RADMIN VPN</h3>
				<p>Esse programa é um modo alternativo para clientes aonde não consegue configurar o seu roteador ou tem operadoras de internet's que não liberam portas para ficarem externas, sendo assim, com esse programa vamos poder fazer com que o retaguarda que esta em uma rede totalmente diferente da loja consiga acessar o webservice sem precisar configurar portas no roteador.</p>
			</div>

			<div class="coluna col11">
				<h2>Instalando o Radmin</h2>
				<p>Primeiro entramos no site do programa <a href="https://www.radmin-vpn.com/br/">RADMIN</a>, baixe o programa, execute e avançar ate o final.<br/>
				No servidor, criamos uma rede e por padrão, o nome da rede é o nome do cliente + codigo do suporte.<br/>
				EXEMPLO:<br/>
				PDVNET3501<br/>
				senha: inter#system<br/>
				O RADMIN tem uma limitação de computadores dentro da rede, no maximo que pode estar dentro de uma rede são 5 computadores, mas o numero de redes é ilimitada, então podemos ter varias redes e 5 computadores dentro da rede, então criamos um padrão para quando o cliente ter mais do que 4 lojas.<br/>
				Vamos colocar nesse padrão.</p>
				<p>EXEMPLO:<br/>
				PDVNET3501 1<br/>
				senha: inter#system</p>


				<p>EXEMPLO:<br/>
				PDVNET3501 2<br/>
				senha: inter#system</p>

				<p>EXEMPLO:<br/>
				PDVNET3501 3<br/>
				senha: inter#system</p>

				<p style="color: red;">O Radmin é case sensitive, então o nome do grupo e a senha tem que estar escrito da mesma forma.</p>
			</div>
		</div>
	</section>
</div>