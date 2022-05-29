<h1> Cadastrar Fornecedor </h1>
<form action="?page=salvar-fornecedor" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Fornecedor</label>
		<input type="text" name="nome_cliente" class="form-control" placeholder="Nome">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="fone_cliente" class="form-control" placeholder="Telefone">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="email" name="email_cliente" class="form-control" placeholder="E-mail">
	</div>
	<div class="form-group">
		<label>Endereço</label>
		<textarea name="end_cliente" rows="3" class="form-control" placeholder="Endereço"></textarea>
	</div>
	<div class="form-group">
		<label>Cnpj</label>
		<input type="cnpj" name="cnpj_cliente" class="form-control" placeholder="Cnpj">
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Salvar</button>
	</div>

</form>


