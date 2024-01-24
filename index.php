<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caju CRUD</title>
    <!-- open sans font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="./src/styles/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <section style="margin: 0 auto;max-width: 640px;">
      <h2 style="text-align: center;margin: 24px 0;">Cadastre o restaurante</h2>
      <div class="container">
        <form action="src/actions/adddata.php" method="post">
          <div class="row">
            <div class="mt-2 form-group col-lg-12">
              <label for="">Nome</label>
              <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">CNPJ</label>
              <input type="text" name="cnpj" id="cnpj" class="form-control" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">Endereço</label>
              <input type="text" name="endereco" id="endereco" class="form-control" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">Telefone</label>
              <input type="text" name="telefone" id="telefone" class="form-control" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">Descrição</label>
              <textarea class="form-control" name="descricao" id="descricao" style="height: 100px;resize: none;" required></textarea>
            </div>
            <div class="mt-3 form-group col-lg-6">
              <input type="submit" name="submit" id="submit" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
    </section>

    <section style="margin: 100px 0;">
      <h4 style="margin-left: 50px">Listagem de restaurantes:</h4>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">CNPJ</th>
              <th scope="col">Endereço</th>
              <th scope="col">Telefone</th>
              <th scope="col">Descrição</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              include_once('./src/models/Restaurante.php');
              $restaurante = new Restaurante();
              $result = $restaurante->getAll();
              foreach ($result as $list) {
                $id = $list['id'];
                $nome = $list['nome'];
                $cnpj = $list['cnpj'];
                $endereco = $list['endereco'];
                $telefone = $list['telefone'];
                $descricao = $list['descricao'];
            ?>
                <tr class="trow">
                  <td><?php echo $id; ?></td>
                  <td><?php echo $nome; ?></td>
                  <td><?php echo $cnpj; ?></td>
                  <td><?php echo $endereco; ?></td>
                  <td><?php echo $telefone; ?></td>
                  <td><?php echo $descricao; ?></td>
                  <td><a href="./src/actions/updatedata.php?id=<?php echo $id; ?>" class="btn btn-warning">Edit</a></td>
                  <td><a href="./src/actions/deletedata.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
              } 
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>