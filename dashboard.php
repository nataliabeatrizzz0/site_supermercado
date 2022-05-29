<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="fontawesome/css/all.css" rel="stylesheet"> 
    <title>Supermercado</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	 <a class="navbar-brand" href="dashboard.php"><i class="fas fa-bullhorn"></i></a>
  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  	    <span class="navbar-toggler-icon"></span>
  	  </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  	    <ul class="navbar-nav mr-auto">
  	      <li class="nav-item active">
  	        <a class="nav-link" href="dashboard.php">Inicio</a>
  	      </li>
         <li class="nav-item dropdown">
  	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  	          Produtos
  	        </a>
  	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  	         <a class="dropdown-item" href="?page=produto-cadastrar">Cadastrar</a>
  	         <a class="dropdown-item" href="?page=listar-produto">Listar</a>
  	        </div>
  	      </li>
  	      <li class="nav-item dropdown">
  	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Fornecedores 
  	        </a>
  	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  	          <a class="dropdown-item" href="?page=fornecedor-cadastro">Cadastrar</a>
  	          <a class="dropdown-item" href="?page=listar-fornecedor">Listar</a>
  	        </div>
  	      </li>
           <?php if($_SESSION["tipo"]=='1'): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuários
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?page=novo-usuario">Novo Usuário</a>
              <a class="dropdown-item" href="?page=listar-usuario">Listar Usuários</a>
            </div>
          </li>
        <?php endif; ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Upload Nota Fiscal
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="?page=upload-nota">Cadastrar</a>
            </div>
          </li>
  	    </ul>

  	    <?php echo "<span class=\"text-secondary space\">Olá ".$_SESSION["nome"]."</span>"; ?>
  	    <form class="form-inline my-2 my-lg-0" action="logout.php"> 
  	      <button class="btn btn-danger my-2 my-sm-0" type="submit">Sair <i class="fas fa-sign-out-alt"></i></button>
  	    </form>
  	</div>
    </nav>

    <div class="container my-5">
        <div class="row">
          <div class="col-lg-12 mt-5">
    	<?php
          include("config.php");

    		switch (@$_REQUEST["page"]) {

            case 'produto-cadastrar':
            include("produto-cadastrar.php");
            break;
            case 'salvar-produto':
            include("salvar-produto.php");
            break;
            case 'listar-produto':
            include("listar-produto.php");
            break;
            case 'fornecedor-cadastro':
            include("fornecedor-cadastro.php");
            break;
            case 'salvar-fornecedor':
            include("salvar-fornecedor.php");
            break;
            case 'listar-fornecedor':
            include("listar-fornecedor.php");
            break;
            case 'novo-usuario':
            include("novo-usuario.php");
            break;
            case 'salvar-usuario':
            include("salvar-usuario.php");
            break;
            case 'listar-usuario':
            include("listar-usuario.php");
            break;
            case 'upload-nota':
            include ("upload-nota.php");
            break;
            case 'listar-nota':
            include ("listar-nota.php");
            break;
            default:
              include ("main.php");
    		}
    		?>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>