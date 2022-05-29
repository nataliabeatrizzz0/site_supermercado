<h1> Listar Fornecedores </h1>
<?php
	$sql = "SELECT * FROM fornecedor";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Codigo</th>";
		print "<th>Nome do Fornecedor</th>";
		print "<th>Telefone</th>";
		print "<th>E-mail</th>";
		print "<th>Endereço</th>";
		print "<th>CNPJ</th>";
		print "<th>Ação</th>";
		print "</tr>";

		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_cliente."</td>";
			print "<td>".$row->nome_cliente."</td>";
			print "<td>".$row->fone_cliente."</td>";
			print "<td>".$row->email_cliente."</td>";
			print "<td>".$row->end_cliente."</td>";
			print "<td>".$row->cnpj_cliente."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-fornecedor&id_cliente=".$row->id_cliente."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-fornecedor&acao=excluir&id_cliente=".$row->id_cliente."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
	}

?>