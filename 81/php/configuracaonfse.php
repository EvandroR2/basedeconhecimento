<section>
	<div class="linha">
		<div class="coluna col11">
			<h1>NFSE</h1>

			<h2>parametrização no cadastro da loja.</h2>
			<p>Vamos no retaguarda, preencher os dados da NFS-e dentro do cadastro da loja, campos obrigatorios para o cliente são:</p>

			<div class="coluna col7">

			<figure class="foto-legenda">
				<img src="img/nfse/cadastrodelojanfse.jpg">
			</figure>
			</div>
			<div class="coluna col4">
				
				
				<p>CNPJ <br/>
				NOME FANTASIA  <br/>
				RAZÃO SOCIAL  <br/>
				CNAE  <br/>
				IE  <br/>
				IM  <br/>
				ENDEREÇO</p>
			</div>
		</div>
		<div class="coluna col11">
			<h2>Aba >> NF-e ELETRONICA</h2>
			<div class="coluna col5">
			<figure class="foto-legenda">
				<img src="img/nfse/cadastrodelojanfseregimetributario.jpg">
			</figure>
			</div>
			<div class="coluna col6">
				
				<p>
				Certificado Digital é opcional vincular, mas é indicado.<br/>
				Regime tributario  <br/>
				Pis  <br/>
				Cofins  <br/>
				Csosn  <br/>
				Serie</p>
			</div>
		</div>
		<div class="coluna col11">
			<div class="coluna col5">
			<figure class="foto-legenda">
				<img src="img/nfse/cadastrodelojanfsedadosparanfse.jpg">
			</figure>
			</div>
			<div class="coluna col6">
				<h3>Dados para NFS-e</h3>
				<p style="font-size: 10pt;">
					Natureza da Operação <br/>
					Série Padrão<br/>
					Aliquota <br/>
					CCM<br/>
					Senha<br/>
					Filial para emitir NFS-e<br/>
				Regime Especial de Tributação.</p>
			</div>
		</div>
		<div class="coluna col11">
			<div class="coluna col5">
			<figure class="foto-legenda">
				<img src="img/nfse/cadastrodelojanfsecfop.jpg">
			</figure>
			</div>
			<div class="coluna col6">
				<p style="font-size: 10pt;">
					Tipo Nota padrão de Venda<br/>
					CFOP padrão de Venda<br/>
					Não necessariamente tem que ser o de serviço, mas caso não tenha nenhum preenchido, o sistema não vai deixar entrar no PONTO DE VENDA.
				</p>
			</div>
		</div>
		<div class="coluna col11">
			<div class="coluna col5">
			<figure class="foto-legenda">
				<img src="img/nfse/regradecfopparanfse.jpg">
			</figure>
			</div>
			<div class="coluna col6">
				<h3>Regras de CFOP</h3>
				<p style="font-size: 10pt;">
				Aqui vamos cadastrar uma regra para quando for feito uma venda do tipo serviço, o sistema usar um CFOP especifico para esse serviço, podemos tambem atribuir o tipo de pessoa, porque pode ter tipo de pessoas de regimes diferentes, mas em geral é mais pelo fato do tipo de produto o sistema ter um CFOP para dentro e fora do estado e tambem temos quando é feito para pessoas de fora do país.</p>
			</div>
		</div>
		<div class="coluna col11">
			<div class="coluna col5">
			<figure class="foto-legenda">
				<img src="img/nfse/tipodenotadeserviconfse.jpg">
			</figure>
			</div>
			<div class="coluna col6">
				<h3>Tipo Nota Serviço</h3>
				<p style="font-size: 10pt;">
					Essa Tela serve para cadastrar uma exceção tributaria, para serviços quando tem impostos dentro da venda, então aqui podemos cadastrar e destacalos.<br/>
					Podemos colocar os impostos e devemos verificar com o contador as normas para aquele municipio.</p>
					<h4 style="background-color: rgba(169,169,169, 0.8); color: red; border-radius: 10px; padding: 5px;">
					Existe uma regra que o valor da Nota de serviço precisa ser maior que R$ 215,05, caso contratio não será calculado o imposto e para o imposto de renda precisa ser maior que R$666,66.</h4>
			</div>
		</div>
		<div class="coluna col11">
			<h2>Tipo Nota Serviço</h2>
			<p>O tipo de nota  <span style="font-size: 14pt; font-weight: bold;">"Venda loja(Tela Vendas ECF)"</span> foi feito para usar na venda de serviço no PDVECF, é para fazer uma exceção tributaria para os impostos da nota de serviço.</p>

			<p>O tipo de nota  <span style="font-size: 14pt;font-weight: bold;">"Valor Absoluto(por Clientes,Tela lote)"</span> foi feito para usar na venda de serviço no PDVATACADO, é um valor feito na nota de serviço para que toda nota de serviço que cadastrar com esse tipo, vai ter esse valor para todos, 

			ex: tipo de nota de serviço com o valor absoluto de R$ 50,00
			caso eu cadastre uma nota de serviço em lote, esse lote se estiver com esse tipo de nota com o valor de serviço e o valor estiver com R$ 50,00, ele vai carregar para todos os serviços que estão dentro desse lote.</p>

			<p>O tipo de nota  <span style="font-size: 14pt;font-weight: bold;">"% sobre valor total(por Nfe,Tela lote)"</span> foi feito para usar na venda de serviço no PDVATACADO, é para cadastrar um lote de serviço pela nota fiscal emitida para o cliente "filial", ou seja, eu posso fazer um filtro para pesquisar todas as notas fiscais emitida, e o valor total dessas notas, pode ser feito um percentual para emitir o serviço.
			EX: tipo de nota de serviço com o "% sobre valor total" de 10%

			caso eu cadastre um nota de serviço em lote, e faço pelo tipo de nota "% sobre valor total", o sistema vai me pedir o seguinte filtro, 
			um periodo de e ate, podemos fazer o filtro pelo clinte "FILIAL".
			o sistema vai carregar todas as notas fiscais desse periodo filtrando essa "FILIAL".

			Supondo que o total de emissão de notas nesse periodo é de R$ 10.000,00, o sistema vai poder emitir a nota de serviço para esse lote, com os 10%, que vai ser uma NFSE de R$ 1.000,00.</p>

			<p>O tipo de nota <span style="font-size: 14pt;font-weight: bold;">"Nota avulsa(por Caixa,Tela lote)"</span> foi feito para usar na venda de serviço no PDVATACADO, é para cadastrar um lote de serviço pela quantidade de venda (ponto de venda) emitida do cliente "filial", ou seja, eu posso fazer um filtro para pesquisar todas as vendas, e o valor total dessas vendas, pode ser feito um percentual para emitir o serviço.
			EX: tipo de nota de serviço com o "NOTA AVULSA" de 10%

			caso eu cadastre um nota de serviço em lote, e faço pelo tipo de nota "NOTA AVULSA", o sistema vai me pedir o seguinte filtro, 
			um periodo de e ate, podemos fazer o filtro pelo cliente "FILIAL".
			o sistema vai carregar todas as vendas desse periodo filtrando essa "FILIAL".

			Supondo que o total dessas vendas nesse periodo é de R$ 10.000,00, o sistema vai poder emitir a nota de serviço para esse lote, com os 10%, que vai ser uma NFSE de R$ 1.000,00.</p>

			<p>O tipo de nota <span style="font-size: 14pt;font-weight: bold;">"Serviço(Tela Cad. Serviço)"</span> foi feito para usar na venda de serviço no PDVATACADO, na tela de "Cadastro de serviço", Esse modelo é feito para a tela de serviço no faturamento, dentro desse modelo, podemos colocar a condição de pagamento, mas o sistema vai da prioridade para o que esta no cadastro do cliente, na classificação financeiro podemos colocar para o sistema quando gerar uma duplicata entrar no contas a receber.</p>

			<p>Dentro do modelo tem a observação aonde o sistema vai carregar essa informação na nota de serviço.

			<p>Lembre de colocar as informaçoes dos impostos e o TIPO DE CLIENTE.
			</p>

			<p>O tipo de nota <span style="font-size: 14pt;font-weight: bold;">"Valor por Cliente(por Clientes, Tela Lote)"</span> foi feito para usar na venda de serviço no PDVATACADO, na tela de "Gerar serviço em lote", Esse modelo é feito para a tela nfse em lote, e vai pegar o valor do serviço que esta no cadastro do cliente, na aba dados para faturamento,<br/>
			podemos colocar a condição de pagamento, mas o sistema vai da prioridade para o que esta no cadastro do cliente, na classificação financeiro podemos colocar para o sistema quando gerar uma duplicata entrar no contas a receber.</p>

			<p>dentro do modelo tem a observação aonde o sistema vai carregar essa informação na nota de serviço.</p>

			<p>lembre de colocar as informaçoes dos impostos</p>

		</div>
		

		<div class="coluna col11">
			<h2>CADASTRO DE PRODUTO</h2>
			<p>O serviço ele vai ser cadastrado como produto, dentro do cadastrado vai ser marcado uma checkbox chamado de serviço, a tributação devemos trocar para ISS em vez de deixar o ICMS e tambem colocar o percentual tributado do ISS, o NCM vai ter a parametrização para serviço e ele será o NBS, devemos tambem no tipo de produto colocar como um tipo de serviço, esse tipo vamos ter regras para tributação no momento da venda aonde ele vai visto para o cliente com tributações e excessões diferentes.</p>

			<h2>PRODUTO COMO SERVIÇO</h2>
			<div class="coluna col5">
			<figure class="foto-legenda">
				<img src="img/nfse/produtoservico.jpg">
				
				<img src="img/nfse/produtoservicoiss.jpg">
				
				<img src="img/nfse/produtoserviconcmtipo.jpg">

				<img src="img/nfse/produtoservicotipodeproduto.jpg">
			</figure>
			</div>
			<div class="coluna col5">
				<br>
				<p>Logo no inicio do cadastro do produtos, temos o checkbox SERVIÇO, vamos marcar para que o sistema na venda ja entenda que esse produto é um serviço.</p>
				<br><br>
				<p>Na Aba >> preços e tributações / Vamos em tributações e verificamos se o tipo de tributo esta como Tributo IIS, porque o serviço não é tributado como ICMS e sim como IIS e vamos devemos orientar o cliente a colocar o percentual do imposto desse serviço.</p>
				<br>
				<p>No Campo de selecionar o NCM, vamos incluir e quando for escolher o tipo, vamos ter duas opções "produto e serviço" vamos selecionar o tipo serviço, que ao cadastrar como serviço e o sistema ja entende que não é NCM e sim um NBS.</p>
				<br>
				<p>Agora, no campo TIPO PRODUTO, vamos ter que escolher um chamado de tipo de SERVIÇO, para a parametrização de uma ou mais exceções tributarias.</p>
			</div>
		</div>
		<div class="coluna col11">
			<h1>PDVECF</h1>
			<h2>Venda</h2>
			<p>O PDVECF vai vender o serviço pela própria tela de venda que é feito o produto, e o sistema vai entender e separar o que é produto ou serviço, então pode ser feito junto com produtos tambem na venda.</p>
			<p>O sistema caso não consiga enviar o serviço, voce vai poder força o envio novamente pela opção enviar nfse que fica no " PDVECF >> nfse >> enviar nfse ".</p>
			<p>No modulo PDVECF, temos a opção NFSE e nessa opção vamos ter varias opções para a questão de serviço, EX: cancelar, consultar, imprimir.</p>
			<p>Em PDVECF >> cadastro geral >> vendas, vamos poder pesquisar o serviço que foi vendido e caso o serviço não foi enviado, dentro dessa venda, tambem temos a opção de enviar.</p>
		</div>
	</div>
</section>