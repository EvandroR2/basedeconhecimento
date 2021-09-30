<section>
	<div class="linha">
		<div class="coluna col11" >
			<h1>Cadastro do TEF no SITEF</h1>
			<h2>Processo do comercial para o tecnico de implantação</h2>
			<p>Esse processo se inicia no comercial quando o cliente faz todo contrato com a empresa, e o comercial vai cadastrar uma ficha para enviar com todos os dados necessarios para o tecnico entrar no SITEF e no GSURF e cadastrar esses dados e dessa forma na loja consegui habilitar o TEF.</p>

			<p>Primeiro voce deve ter esses acessos com permissoes de cadastro, e tambem um aplicativo que é indicado pelo e-mail que chega para voce no momento do cadastro desse acesso.<br/>
			com os dados em mãos, voce vai entrar primeiro no site do SITEF e cadastrar a loja, para todo cadastro de uma loja, é preciso cadastrar a marca e no video vamos ver o procedimento.</p>

			<div style="padding-left: 220px;">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/E2fsZgclSoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<p>No video, é explicado o cadastro de um cliente novo para usar o TEF:<br/>
				primeiro passo é cadastrar a marca e automaticamente o site ja faz o cadastro da loja.</p>

			<div style="padding-left: 220px;">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/bQnGSvcTYoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

				<p>segundo passo é entrar no site da GSURF e cadastrar o TERMINAL de acordo como chega na ficha e dessa forma vai ser gerado a OTP. (não esqueça de ativar como mostrar o video).</p>

			<div style="padding-left: 220px;">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/cxUd2ptJPnY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

				<p>Terceiro passo, dentro do site do SITEF, vamos no gerenciar de TEF e vamos apontar as administratoda e da carga para o TEF funcionar na loja.</p>






		</div>

	</div>
	
</section>

<section>
	<div class="linha">

		<section>
			<div class="coluna col11" >
			<h1>Instalação do TEF</h1>
			<h2>Processo Tecnico com o cliente</h2>
			<p>O Tecnico vai conectar com o cliene, e com o cliente explicar as partes que são configuradas no retaguarda, quando o cliente vai usar o TEF, ele vai ter que Habilitar as regras no sistema, REGRA 33 e 82.<br/>
			Essas regras são para ativar a tela nova de pagamento que hoje por padrão ja são configuradas no cliente novo, mas para os clientes antigo ainda esta sendo migrada, então ativando essa regras e colocando somente as formas de pagamento que são para a loja visivel (regra 82), ja podemos fazer as outras configurações.</p>

			<h2>Retaguarda</h2>
			<h3>Formas de pagamento como configurar</h3>
			<p>Quando habilitado a regra 33, o sistema vai trabalhar com plano de pagamento, dessa forma o tecnico vai parametrizar as formas de pagamento que a loja vai trabalhar, não somente o tef, e sim todas as outras:<br/><br/>
			<span style="font-size: 11pt;">(DESCONTO /
			DINHEIRO /
			CARTAO DEBITO /
			CARTAO CREDITO /
			CREDIARIO /
			DEPOSITO /
			BONUS /
			OUTROS /
			CHEQUE)</span>
			<br/><br/>
			Mas como que vai ter o TEF, o tecnico vai deixar CARTAO DE DEBITO POS e CARTAO DE DEBITO TEF e para o CREDITO a mesma coisa, porque o cliente pode ter queda de internet, problema com o TEF e dessa forma se ele tiver um POS, ele vai passar como medida de emergencia.</p>

			<p>veja a imagem abaixo:</p>
			<figure class="foto-legenda col8">
				<img src="img/tef/telaplanodepagamento.jpg">
			</figure>
			</div>
			<div class="coluna col11">

			<div class="coluna col7">
			<p>Como pode ver na imagem, o CARTAO DE CREDITO, na coluna de parcela esta zerada, porque voce vai parametrizar essa informação de numero de parcela, na tela de configuração das lojas.<br/><br/>
				Na imagem como exemplo:<br/>O cartão vai parcelar no maximo em 6 vezes.</p>
			</div>
			<div class="coluna col4">

			<figure class="foto-legenda">
				<img src="img/tef/telaplanodepagamentocadastrodeparcelas.jpg">
			</figure>
			</div>

			</div>
			<div class="coluna col11">
				<h3 style="font-size: 18pt;">CARTÕES</h3>

				<div class="coluna col8">

			<figure class="foto-legenda">
				<img src="img/tef/cartaotefbandeiras.jpg">
			</figure>
			</div>
			
			
			<div class="coluna col8">

			<figure class="foto-legenda">
				<img src="img/tef/cartaotefbandeiras1.jpg">
			</figure>
			</div>

			<div class="coluna col8">

			<p>Como preencher os dados na tela cartão<br/>
			Veja que as bandeiras de cartoes devem ser cadastradas com o CNPJ, e dentro do cadastro vamos marca a opção TEF.</p>
			</div>


			</div>


			<div class="coluna col11">

			<h3 style="font-size: 18pt;">Execção no ESTADO PE</h3>
			
			<div class="coluna col10">
				<figure class="foto-legenda">
				<img src="img/tef/cadastrodelojape.jpg">
			</figure>
			</div>
			<div class="coluna col10">
				<p>No estado de PERNAMBUCO, quando cadastra a loja, colocando a UF "PE", o sistema vai habilitar uma nova aba, chamada VFP-e, para o cadastro dos adquirintes, esses dados tem que ser preenchido, entre outros campos preenchidos automaticos quando colocado o adquirinte.<br/>
					O adquirinte é cadastrado no PDVGESTOR >> 6- LOJAS/FORNECEDORES/VENDEDORES >> ADQUIRINTES.</p>
			</div>
			<div class="coluna col6">
			
			<p>Nessa Tela, vamos incluir os adquirintes do que o cliente vai trabalhar e na aba VFP-e, os adquirintes vão começar aparecer.</p>
			</div>
			<div class="coluna col4">
				<figure class="foto-legenda">
				<img src="img/tef/cadastrodeadquirinte.jpg">
			</figure>
			</div>

			</div>
			
			<div class="coluna col11">

				<p style="color: blue;">Pronto, ja pode ir para a parte da loja fazer a instalação dos componentes do TEF e testar uma venda.</p>
			</div>
			<div class="coluna col11">


			<h2>Loja</h2>
			<p>baixar os componentes</p>
			<p>identificar o equipamento do TEF e verificar se é possivel instalar, quando não, explicar ao cliente que ajudamos no que é possivel, quando não precisamos de um tecnico de informatica para instalar equipamentos para dar sequencia na instalação.</p>
			<p>passo a passo para a instalação.</p>
			<p>teste</p>
			<p>Explicação de venda, explicação de estorno</p>

			<h2>Portal</h2>

			<h2>Portal</h2>
			<p>Site do <a href="https://sitefexpressadm.softwareexpress.com.br/sitefwebadm" target="_blank">SITEF</a>
			</p>
			<p>Vai ser preciso ter um acesso de login e senha para criar o usuario para o cliente:</p>

			<p>No site, vamos ter que listar os clientes cadastrados e pesquisar o cliente, entrar no cliente e ir na opção</p>
			<p>pegar melhor as informações com Daniel.</p>
		</div>
	</section>
</div>
