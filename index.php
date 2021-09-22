<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$root = realpath($_SERVER["DOCUMENT_ROOT"]) . '/ester';
require_once($root . "controller/ControllerCadastro.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="text/javascript"></script>
  <title>APLICATIVO</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">SISTEMA WEB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/pw/pw_agendamentos">Consultar Clientes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/pw/pw_agendamentos/cadastrarClientes.php">Cadastrar Clientes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/pw/pw_agendamentos/exluirCliente.php">Excluir Clientes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <h5 class="mt-5">Consultar -Contatos Agendados</h5>

    <div class="table-responsive mt-5">
      <table class="table table-response">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Origem</th>
            <th scope="col">Contato</th>
            <th scope="col">Observação</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $controller = new cadastroController();
            $resultado = $controller->listar();
            for($i=0;$i<count($resultado);$i++) {
          ?>
            <tr>
              <td scope="row"><?php echo $resultado[$i]['nome']; ?></td>
              <td><?php echo $resultado[$i]['telefone']; ?></td>
              <td><?php echo $resultado[$i]['origem']; ?></td>
              <td><?php echo $resultado[$i]['data_contato']; ?></td>
              <td><?php echo $resultado[$i]['observacao']; ?></td>
              <td>
                <button type="button" class="btn btn-outline-primary" style="width: 72px;">Editar</button>
                <a href="consultarClientes.php" type="button" class="btn btn-outline-primary" style="width: 72px;">Excluir</a>
              </td>
            </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
    <button type="button" id="btnListar" class="btn btn-primary mt-3">Buscar Agendamento</button>

    <script src="./bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>