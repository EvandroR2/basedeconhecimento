<section>
<div class="linha">
<div class="coluna col12">
<h1>planodepagamento</h1>
<div class="coluna col6">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_pesquisa_planodepagamento.jpg">
</figure>
</div>

<div class="coluna col5">
<h2>Tela de pesquisa de Plano de pagamento</h2>
<p>Aqui vamos ter uma tela aonde vamos poder pesquisar os planodepagamento que foram cadastrados</p>
</div>
<div class="coluna col6">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_pesquisa_validoparalojas_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col5">
<p>Temos um checkbox para selecionar o tipo de planodepagamento é valido para loja ou tambem temos o checkbox "inativo" para ver se tem plano de pagamento está inativo.</p>
</div>
<div class="coluna col7">
<p>Caso não tenha o cliente, podemos ir na opção INCLUIR, para cadastrar um cliente.<br/>
Caso pesquise o cliente e queira alterar informações do cliente cadastrado, podemos ir na opção ALTERAR.<br/>
Caso pesquise o cliente e queira ver informações do cliente cadastrado, podemos ir na opção CONSULTAR.<br/>
Caso pesquise o cliente e queira inativar a informação do cadastro, podemos ir na opção EXCLUIR.</p>
</div>
<div class="coluna col5">
<figure class="foto-legenda">
	<img src="img/telaincluiralterarconsultarexcluir.jpg">
</figure>
</div>
<div class="coluna col10">
<h2>Cadastro de planodepagamento</h2>
</div>
<div class="coluna col10">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_cadastro_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col12">
	<div class="coluna col10">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_1parte_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col10">
	<p> Código &#10151; Campo para informar o código do plano de pagamento. <br/>
		Descrição &#10151; Campo para colocar a descrição do plano de pagamento.<br/>
		Forma de pagamento &#10151; Campo para informar o tipo de pagamento.<br/>
		Parcelas &#10151; Campo para informar o numero de parcelas.<br/>
		Rede &#10151; Campo para infomar em qual rede o plano de pagamento vai funcionar, caso coloque em branco, vai funcionar para ambas redes.<br/>
		Ordem &#10151; Campo para informar a ordem.<br/>
		Atalho &#10151; Campo para informar a tecla de atalho na venda, (Alt + a tecla de atalho).<br/>
		Inativo &#10151; Checkbox para inativar o plano de pagamento.<br/>
	</p>
</div>
</div>
<div class="coluna col12">
	<div class="coluna col4">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_2parte_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col7">
	<p> Valido para lojas, foi feito para informar se esse plano de pagamento quando cheque e na configuração das lojas a loja esta configurada para trabalhar com plano de pagamento em cheque, esse plano vai aparecer.
	</p>
</div>
</div>
<div class="coluna col12">
	<div class="coluna col4">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_3parte_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col7">
	<p> Aqui podemos indentificar somente 2 checkbox hoje que funciona, outros provavelmente ainda em fase de desenvolvimento.<br/>
	Alimenta saldo conta corrente &#10151; Checkbox para informar que esse plano de pagamento vai alimentar o saldo. <br/>
	Não duplica plano &#10151; Checkbox para informar que esse plano não vai poder duplicar na venda (é o que eu entendo)<br/>
	Habilitar TEF &#10151; Checkbox para habilitar o tef, somente para usar em formas de pagamento aonde usar cartão de crédito ou debito.<br/>
	Visivel na Venda &#10151; Checkbox para que esse plano de pagamento apareça na tela de vendas do PDVECF, somente quando a regra 33 e a regra 82 forem Habilitadas.<br/>
	Identificação Extrato Bancario  &#10151; Campo para informar o extrato bancario, atualmente não sei para que funciona ou qual seria a ideia.<br/></p>
</div>
</div>
<div class="coluna col12">
	<div class="coluna col4">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_4parte_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col7">
	<p> Quando colocado o numero de parcelas, nesse campo em branco voce pode colocar o numero de dias que cada parcela vai debitar, EX:<br/>
		3 parcelas<br/>
		1º parcela &#10151;10 dias, 2º parcela &#10151; 20 dias e 3º parcela 30 dias.<br/>
		ou <br/>
		1º parcela &#10151;30 dias, 2º parcela &#10151; 60 dias e 3º parcela 90 dias.<br/>
	É dessa forma, porque não é para cartão de crédito, serve para todos os tipo de forma de pagamento que vão trabalhar com formas de pagamento.</p>
	<h4 style="background-color: rgba(169,169,169, 0.8); color: red; border-radius: 10px; padding: 5px;">Fique atento com as regras, porque tem regra que pode mudar essa questão.</h4>
</div>
</div>
<div class="coluna col12">
	<div class="coluna col4">
<figure class="foto-legenda">
	<img src="img/planodepagamento/tela_de_5parte_planodepagamento.jpg">
</figure>
</div>
<div class="coluna col7">
	<p> Valido para crédiario ? &#10151; Aqui voce vai colocar que o plano de pagamento vai ser para o crédiario, Sim ou não.<br/>
		Valido para crédiario ? Aqui voce vai colocar que o plano de pagamento vai ser para a condição de pagamento da nota fiscal, Sim ou não.&#10151; <br/>
		Cartão &#10151; pordemos colocar uma forma de pagamento de um cartão vinculado somente para uma bandeira.<br/>
		Fator Tabela de Preço % &#10151; Campo para informar o fator em percentual da tabela de preço.</p>
</div>
</div>