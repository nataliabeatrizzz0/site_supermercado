<?php
	switch ($_REQUEST["acao"]) {
		case "novo-usuario":
			if($_POST["tipo_usuario"]==1){
				$foto = "adm.jpg";
			}else{
				$foto = "usuario.jpg";
			}
			$sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, 
					tipo_usuario, foto_usuario) VALUES ('".$_POST["nome_usuario"]."', 
				'".$_POST["email_usuario"]."', '".md5($_POST["senha_usuario"])."',  '".$_POST["tipo_usuario"]."', '".$foto."')";

			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Usuário cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}

		break;

		case "status-usuario":
			if($_GET["status"]==1){
				$sql = "UPDATE usuario SET status_usuario='0' WHERE id_usuario=".$_GET["id_usuario"];
			}else{
				$sql = "UPDATE usuario SET status_usuario='1' WHERE id_usuario=".$_GET["id_usuario"];
			}
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Alterado com sucesso!');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível alterar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
		break;		
	}
?>