<section>
	<div class="linha">
	
		<div class="coluna col11" >
			<section style="margin-left:40px;margin-right:40px">
				<h1>Troca de Cnpj</h1>
				<h2>Processo Tecnico com o cliente</h2>
			
				<p>A troca de Cnpj deve ser visto com o cliente o modo que ele prefere fazer, porque a troca pode ser feita por dois modos:</p>
					<ul>
						<li>Trocar os dados antigo da filial com os dados novos do CNPJ</li>
						<li>Incluir uma filial nova com os dados do novo CNPJ</li>
					</ul>
				<p>O cliente tem que ter ciencia sobre os dois modos, porque ambos tem seus lado positivos, como que tambem tem seus lado negativos.</p>
		

				<h2>Trocar os dados antigo da filial com os dados novos do CNPJ</h2>
			
				<p>A troca de cnpj alterando os dados somente na filial, faz com que o cliente mantenha seu historico de venda visivel na loja, então a filial vai continuar vendo o que foi vendido, como que tambem a filial continua com consignação aparecendo e seu saldo se mantem, aonde apenas o seus dados serão trocado, mas tambem fica misturado o CNPJ antigo com o CNPJ novo, aonde o cliente não vai indentificar quando é uma venda de cnpj antigo como o novo.</p>
		
				<h2>Incluir uma filial nova com os dados do novo CNPJ</h2>
		
				<p>Incluir uma filial, é vida nova, ou seja, vai ser feito um parametro novo, os cartoes, usuario, vendedores e o saldo pode ser transferido da antiga para a nova, mas as vendas na loja não vão poder ser visto porque aquela filial na loja não pertence mais, então só vai poder ser visto no seu RETAGUARDA, e isso é bom, porque o XML não se mistura, voce consegue consultar o passado do seu CNPJ antigo, se ficar pendente algo, consegue buscar pelo sistema.</p>
			</section>
		</div>
		<div class="coluna col11">
			<section style="margin-left:40px;margin-right:40px">
				<h2>Troca de CNPJ Alterarando os Dados</h2>
			
				<p>A troca de CNPJ alterando os dados, o cliente vai fornecer os dados e o tecnico primeiramente deve conectar com a loja e a RETAGUARDA.<br/>
				Então no RETAGUARDA, deve ir em cadastro de lojas indentificar a filial e entrar na filial selecionando o botão ALTERAR.<br/>
				Vai ter que alterar os dados da empresa:<br/><br/>
		
				<figure class="foto-legenda">
					<img src="img/filialdados.jpg">
				</figure>
				<br/>
				<ul>
					<li>Cnpj</li>
					<li>Razão Social</li>
					<li>Nome Fantasia</li>
					<li>CNAE</li>
					<li>Endereço (se tiver mudado)</li>
				</ul>
				<p>Dados Fiscais</p>
				<p>Os dados tributários devem ser verificados, se houve alguma alteração ou se vai se manter o mesmo:</p><br/>
				<figure class="foto-legenda col4">
					<img src="img/dadosderegime.jpg">
				</figure>
			
				<p>Verificar se os dados de CFOP vão se manter o mesmo:</p>
				<figure class="foto-legenda col4">
					<img src="img/dadosdecfop.jpg">
				</figure>

				<p>Caso o cliente tenha que inserir o novo TOKEN e o CSC, também deve-se pegar com o cliente:</p>
				<figure class="foto-legenda col4">
					<img src="img/dadoscscetoken.jpg">
				</figure>

				<p>Caso o cliente trabalhe com NFSE verificar os dados:</p>
				<figure class="foto-legenda col4">
					<img src="img/dadosparanfse.jpg">
				</figure>

				<p>Deve-se verificar se o numero de série e numero de nota para informar no cadastro de serie:</p>
				<figure class="foto-legenda col4">
					<img src="img/serienfe.jpg">
				</figure>

				<p>Depois de ter alterado os dados, deve-se exportar os dados para a loja, e verificar se os dados exportados estão correto conforme foram alterados.</p>
				<h3>Processo na Loja</h3>
				<p>Na loja vamos verificar se o cliente ja deixou instalado o certificado e se os dados foram alterados, o banco de dados é o mesmo, então não vamos conseguir emitir notas porque dentro do banco de dados temos informaçoes de notas com numero de notas e o sistema não vai deixar duplicar, então devemos apagar do banco de dados as insfomaçoes da tabela nota fiscal e itens nota (somente na loja).<br/><br/>
				Antes de apagar essas informaçoes no banco de dados vamos fazer um backup dessa tabela e depois rodamos o comando para apagar.</p>
				<p>
					Select * into notafiscaltrocadecnpjbkp from nota_fiscal<br/>
					Select * into itensnotatrocadecnpjbkp from itensnota</p>
					<img src="img/comandointobkp.jpg">
					<p>Depois:</p>
					<p>delete from notafiscal<br/>
					delete from itensnota
				</p>
				<img src="img/comandodeletetrocadecnpj.jpg">
				<h4 id="red">O delete nunca pode ser feito em um cliente de ponto unico, porque ele perde a informação para sempre, então devemos orientar e deixar avisado antes de rodar o delete.</h4>
				<br/>
				<p>Ok, agora podemos testar uma venda, não esqueça de conferir se na loja, o numero de nota e a serie eles foram alterados, porque depois que faz a emissão, não tem voltar, podemos cancelar a venda, só que o pulo do numero da nota pode ser muito grande, e isso prejudica o cliente, porque a contabilidade pode pedir para inutilizar todos os numero que foram pulados.</p>
			</section>
		</div>
		<div class="coluna col11">
			<section style="margin-left:40px;margin-right:40px">
				<h2>Incluir uma filial nova com os dados do novo CNPJ</h2>

				<p>A troca de CNPJ incluindo uma filial nova, o cliente deve fornecer os dados e o tecnico primeiramente deve conectar com a loja e a RETAGUARDA.<br/>
				Então no RETAGUARDA, deve ir em cadastro de lojas e incluir uma nova filial pelo botão INCLUIR.<br/>
				E preencher os dados da nova filial:<br/><br/>
				<figure class="foto-legenda">
					<img src="img/filialdados.jpg">
				</figure>
				<br/>
				<ul>
					<li>Cnpj</li>
					<li>Razão Social</li>
					<li>Nome Fantasia</li>
					<li>CNAE</li>
					<li>Endereço (se tiver mudado)</li>
				</ul>
				<h3>Dados Fiscais</h3>
				<p>Os dados tributario deve ser verificado se mudou ou se vai se manter o mesmo:</p><br/>
				<figure class="foto-legenda col4">
					<img src="img/dadosderegime.jpg">
				</figure>

				<p>Verificar se os dados de CFOP vão se manter o mesmo:</p>
				<figure class="foto-legenda col4">
					<img src="img/dadosdecfop.jpg">
				</figure>

				<p>Caso o cliente tenha que inserir o novo TOKEN e o CSC, tambem deve pegar com o cliente:</p>
				<figure class="foto-legenda col4">
					<img src="img/dadoscscetoken.jpg">
				</figure>

				<p>Caso o cliente trabalhe com NFSE verificar os dados:</p>
				<figure class="foto-legenda col4">
					<img src="img/dadosparanfse.jpg">
				</figure>


				<p>Deve verificar se o numero de serie e numero de nota para informar no cadastro de serie:</p>
				<figure class="foto-legenda col4">
					<img src="img/serienfe.jpg">
				</figure>
			


				<p>Vale lembrar que como é um cadastro novo, deve incluir tambem, os cartoes, usuarios e vendedores.<br/>
				Verifique se o cliente vai virar o saldo(estoque) tambem da loja, para que faça a transferencia de inventario para a nova filial.<br/>
				Existe uma ferramenta que foi feita para esse tipo de troca de cnpj, fica em RETAGUARDA >> MANUTENÇÃO >>  MANUTENÇÃO DAS TABELAS >> OUTROS 2<br/>
				Lá voce tem como colocar a filial antiga e a filial nova, o periodo que voce quer transferir o pedido de compra tambem.</p>
				<figure class="foto-legenda col4">
					<img src="img/manutencaotrocadecnpj.jpg">
				</figure>
			</section>
		</div>
		<div class="coluna col11">
			<section style="margin-left:40px;margin-right:40px">
				<h2>Equipamento S@T ou MF-e</h2>
				<p>Os equipamentos devem ja estar desvinculado para que a SOFTHOUSE (PDVNET) consiga vincular o CNPJ DA EMPRESA COM O DO CLIENTE, isso é importante para a emissão da nota, então caso o cliente não consiga desvincular, pode ser reagendado antes de trocar o CNPJ, porque se for feito a troca de cnpj o cliente não vai conseguir emitir nota ate o equipamento ser desvinculado.</p>
			</section>
		</div>
		</div>
	</div>
</section>
