<h1> Cadastrar Produtos </h1>
<form action="?page=salvar-produto" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Produto</label>
		<input type="text" name="nome_produto" class="form-control">
	</div>
	<div class="form-group">
		<label>Valor do Produto</label>
		<input type="text" name="produto_valor" class="form-control">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="text" name="produto_quantidade" class="form-control">
	</div>
	<div class="form-group">
		<label>Nome do Fornecedor</label>
		<?php
			$sql = "SELECT * FROM fornecedor";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			if($qtd > 0){
				print "<select name='produto_id_fornecedor' class='form-control' >";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_cliente."'>".$row->nome_cliente."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
			}
		?>
	</div>
		<div class="form-group">
				<button class="btn btn-success" type="submit">Enviar</button>
			</div>
	</form>


