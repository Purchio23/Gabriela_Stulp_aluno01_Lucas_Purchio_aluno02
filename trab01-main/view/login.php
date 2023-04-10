<?php
include '../Util.php';
if(!empty($_POST)){
    Util::logar($_POST);
}
$_SESSION['sair'] = 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login Sistema Acadêmico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <h3 class="text-center mb-4">Login LP Agencia de Marketing</h3>
          <?php if(isset($_GET["msg"])) { ?>
          <div class="alert alert-danger">
            Login ou senha inválidos. Por favor, tente novamente.
          </div>
          <?php } ?>
          <form action="login.php" method="post">
            <div class="mb-3">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login" placeholder="Usuário">
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="******">
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
