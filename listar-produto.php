<h1>Listar Produtos </h1>
<?php
	$sql = "SELECT * FROM produto";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Codigo</th>";
		print "<th>Nome do Produto</th>";
		print "<th>Valor do Produto</th>";
		print "<th>Quantidade</th>";
		print "<th>Nome do fornecedor</th>";
		print "<th>Ação</th>";
		print "</tr>";

		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_produto."</td>";
			print "<td>".$row->nome_produto."</td>";
			print "<td>".$row->produto_valor."</td>";
			print "<td>".$row->produto_quantidade."</td>";
			print "<td>".$row->produto_id_fornecedor."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-produto&id_produto=".$row->id_produto."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-produto&acao=excluir&id_produto=".$row->id_produto."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
	}

?>