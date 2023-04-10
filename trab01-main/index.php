

<DOCTYPE html>
    <html>
        <head>
            <title>LG Agência</title>
            <meta charset="UTF-8">

       <!-- link do bootstrap -->
       <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
            <!--Cabeçalho-->
            <header>
                <!--Menu-->
           
<nav class="navbar navbar-expand-sm navbar-dark bg-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LG Agência</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./view/TrabConoscoList.php">Currículos recebidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view/UsuarioList.php">Usuários Cadastrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view/ReuniaoList.php">Lista de Reuniões</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
  <a href="./view/login.php">
    <button class="btn btn-primary" type="button">Logar</button>
        </a>
      </li>
    </div>
  </div>
</nav>
</header>
  <br>
    <br>
      <br>
      <div class="container">
  <div class="row d-flex justify-content-around">
    <div class="col-md-4 rounded border border-2 shadow">
      <div class="text-center">
        <img src="servico.jpg" class="rounded-circle mx-auto d-block align-middle" width="60%">
      </div>
      <h2 class="text-center">Trabalhe Conosco</h2>
      <p class="text-center">Preencha os dados abaixo</p>
      <p class="text-center"><a href="./view/TrabConoscoForm.php" class="btn btn-info" role="button">Enviar proposta</a></p>
    </div>
    <div class="col-md-4 rounded border border-2 shadow">
      <div class="text-center">
        <img src="agende.jpg" class="rounded-circle mx-auto d-block align-middle" width="60%">
      </div>
      <h2 class="text-center">Cadastro de Usuário</h2>
      <p class="text-center">Preencha o formulário</p>
      <p class="text-center"><a href="./view/UsuarioForm.php" class="btn btn-info" role="button">Cadastrar</a></p>
    </div>
    <div class="col-md-4 rounded border border-2 shadow">
      <div class="text-center">
        <img src="user.jpg" class="rounded-circle mx-auto d-block align-middle" width="60%">
      </div>
      <h2 class="text-center">Agende uma reunião</h2>
      <p class="text-center">Vamos conversar?</p>
      <p class="text-center"><a href="./view/ReuniaoForm.php" class="btn btn-info" role="button">Marcar reunião</a></p>
    </div>
  </div>
</div>






