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
    <link rel="stylesheet" href="./style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <section style="margin: 0 auto;max-width: 640px;">
      <h1 style="text-align: center;margin: 50px 0;">Cadastre aqui seu restaurante</h1>
      <div class="container">
        <form action="adddata.php" method="post">
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
              <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>