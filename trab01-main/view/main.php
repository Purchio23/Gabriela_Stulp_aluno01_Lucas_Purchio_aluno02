<?php
  include '../Util.php';
  Util::verificar();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>LG Agencia de Marketing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container text-center mt-5">
      <h3>LG Agencia de Marketing</h3>
      <?php
        echo "Seja bem-vindo usuário: " .$_SESSION['login']. " <a href='login.php'>Sair</a>";
      ?>
      <div class="mt-5">
        <a href="../index.php" class="btn btn-primary">Voltar para a tela de início</a>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
