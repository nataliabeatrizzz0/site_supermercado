<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome_produto"];
			$valor  = $_POST["produto_valor"];
			$quantidade = $_POST["produto_quantidade"];
			$fornecedor = $_POST["produto_id_fornecedor"] ;

			$sql = "INSERT INTO produto (nome_produto, produto_valor, produto_quantidade, produto_id_fornecedor)  
					VALUES ('{$nome}', '$valor', '$quantidade', '$fornecedor')";
			$res = $conn->query($sql);

			
			if($res==true){
				print "<script>alert('Foi cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar :(</div>";
			}
			break;
		
		case 'editar':
			$nome = $_POST["nome_produto"];
			$valor  = $_POST["produto_valor"];
			$quantidade = $_POST["produto_quantidade"];
			$fornecedor = $_POST["produto_id_fornecedor"];

			$sql = "UPDATE produto SET
						nome_produto='{$nome}',
						produto_valor='{$valor}',
						produto_quantidade='{$quantidade}',
						produto_id_fornecedor='{$fornecedor}'
					WHERE 
						id_produto=".$_POST["id_produto"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Foi editado com sucesso!');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar :(</div>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM produto WHERE id_produto=".$_REQUEST["id_produto"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='?page=listar-produto';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir :(</div>";
			}
		break;
		
	}
?>