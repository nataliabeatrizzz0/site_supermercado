<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Supermercado</title>
  </head>
  <body>
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Supermercado<br> </h2>
            <p>Entre com suas credenciais:</p>
            <br><br><br><br><br><br><br><br>
            <p>Acesso restrito a funcionários!</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form id="Login" action="login.php" method="POST">
                  <div class="form-group">
                     <label>E-mail</label>
                     <input type="email" name="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha">
                  </div>
                  <button type="submit" class="btn btn-black">Entrar</button>
                  <button type="submit" class="btn btn-secondary">Recuperar senha</button>
               </form>
            </div>
         </div>
      </div>
        
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>