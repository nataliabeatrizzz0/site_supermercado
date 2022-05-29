<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome_cliente"];
			$fone  = $_POST["fone_cliente"];
			$email = $_POST["email_cliente"];
			$end = $_POST["end_cliente"];
			$cnpj = $_POST["cnpj_cliente"];

			$sql = "INSERT INTO fornecedor (nome_cliente, fone_cliente, email_cliente, end_cliente, cnpj_cliente)  
					VALUES ('{$nome}', '$fone', '$email', '$end','$cnpj')";
			$res = $conn->query($sql);

			
			if($res==true){
				print "<script>alert('Foi cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=listar-fornecedor';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar :(</div>";
			}
			break;
		
		case 'editar':
			$nome = $_POST["nome_cliente"];
			$fone  = $_POST["fone_cliente"];
			$email = $_POST["email_cliente"];
			$end = $_POST["end_cliente"];
			$cnpj = $_POST["cnpj_cliente"];

			$sql = "UPDATE fornecedor SET
						nome_cliente='{$nome}',
						fone_cliente='{$fone}',
						email_cliente='{$email}',
						end_cliente='{$end}',
						cnpj_cliente='{$cnpj}'
					WHERE 
						id_cliente=".$_POST["id_cliente"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Foi editado com sucesso!');</script>";
				print "<script>location.href='?page=listar-fornecedor';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar :(</div>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM fornecedor WHERE id_cliente=".$_REQUEST["id_cliente"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Foi excluído com sucesso!');</script>";
				print "<script>location.href='?page=listar-fornecedor';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir :(</div>";
			}
		break;
		
	}
?>