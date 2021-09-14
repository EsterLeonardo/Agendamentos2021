<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
              <a class="nav-link" href="/pw_agendamento">Consultar Clientes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/pw_agendamento/cadastrarClientes.php">Cadastrar Clientes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/pw_agendamento/exluirCliente.php">Excluir Clientes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <h5 class="mt-5">Excluir - Agendamento de Potenciais Clientes</h5>
    <p>Sistema ultilizado para agendamento de serviços</p>

    <form class="row g-3" method="POST" action="functions/cadastrar.php">
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="inputEmail4">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="inputAddress" placeholder="(11)11111-1111">
      </div>

      <div class="col-md-12">
        <label for="inputCity" class="form-label">Origem: </label>
        <select class="form-select" aria-label="Default select example" name="origem">
          <option value="Celular">Celular</option>
          <option value="Telefone">Telefone</option>
        </select>
      </div>

      <div class="col-md-12">
        <label for="inputZip" class="form-label">Data contato</label>
        <input type="date" class="form-control" name="data" id="inputZip">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="4"></textarea>
      </div>

      <div class="mb-5">
        <button type="submit" class="btn btn-primary">Buscar</button>
        <button type="submit" class="btn btn-primary">Exluir</button>
      </div>
    </form>
  </div>

  <script src="./bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>