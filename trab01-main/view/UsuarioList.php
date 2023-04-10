<?php 
include "../controller/UsuarioController.php";

   $usuario = new UsuarioController();

  if(!empty($_GET['id'])){
    $usuario->deletar($_GET['id']);
    header("location: UsuarioList.php");
  }
  if(!empty($_POST)){
    $load = $usuario->pesquisar($_POST);

  }else{
    $load = $usuario->carregar();

  }
   //var_dump($load);
  // exit;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">LG Agência</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="TrabConoscoList.php">Currículos recebidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="UsuarioList.php">Usuários Cadastrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ReuniaoList.php">Lista de Reuniões</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
  <a href="login.php">
    <button class="btn btn-primary" type="button">Logar</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
 <br>
 <br>
 <br>
    <div class="container">
    <div class="row">
    <h1>Listagem de Usuários</h1>
    <form action="UsuarioList.php" method="post">
      
      <div class="row">
        <div class="col-2">
        <select name="campo" class="form-select">
          <option value="nome">Nome</option>
          <option value="telefone">Telefone</option>
          <option value="cpf">CPF</option>
</select>
  </div>
  <div class="col-4">
  <input type="text" class="form-control" placeholder="Pesquisar" name="valor"/>
</div>
  <div class="col-6">
      <button class="btn btn-success" type="submit">
      <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
      <a class="btn btn-primary"href="UsuarioForm.php"><i class="fa-solid fa-plus"></i> Cadastrar</a>
  </div>

      
  </form>
  <table class="table table-striped table-hover">
  <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">CPF</th>
            <th scope="col"></th>
        </tr>
</thead>  <tbody>

    <?php 
    foreach($load as $item){
      echo"<tr>
            <td scope='row'>$item->id</td>
            <td>$item->nome</td>
            <td>$item->telefone</td>
            <td>$item->cpf</td>
            <td><a href='./UsuarioForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='./UsuarioList.php?id=$item->id'
                    onclick='return confirm(\"Deseja Excluir?\")'><i class='fa-solid fa-trash'></i></a></td>
           </tr>";
    }
        ?>
          </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>