<?php
  require_once('conn.php');
  if (isset($_POST['nome']) && 
      isset($_POST['cnpj']) &&
      isset($_POST['endereco']) &&
      isset($_POST['telefone']) &&
      isset($_POST['descricao'])) {

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    
    $sql = "UPDATE restaurantes SET `nome`= '$nome', `cnpj`= '$cnpj', `endereco`= '$endereco', `telefone`= '$telefone', `descricao`= '$descricao' 
            WHERE id = " . $_GET['id'];
    if (mysqli_query($conn, $sql)) {
      header("location: index.php");
    } else {
      echo 'Algo deu errado. Tente novamente mais tarde.';
    }
  }
?>

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
      <h2 style="text-align: center;margin: 24px 0;">Atualize o restaurante</h2>
      <div class="container">
        <?php
          require_once('conn.php');
          $sql_query = "SELECT * FROM restaurantes WHERE id = " . $_GET['id'];
          if ($result = $conn ->query($sql_query)) {
            while ($row = $result -> fetch_assoc()) { 
              $id = $row['id'];
              $nome = $row['nome'];
              $cnpj = $row['cnpj'];
              $endereco = $row['endereco'];
              $telefone = $row['telefone'];
              $descricao = $row['descricao'];
        ?>
        <form action="updatedata.php?id=<?php echo $id; ?>" method="post">
          <div class="row">
            <div class="mt-2 form-group col-lg-12">
              <label for="">Nome</label>
              <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome; ?>" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">CNPJ</label>
              <input type="text" name="cnpj" id="cnpj" class="form-control" value="<?php echo $cnpj; ?>" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">Endereço</label>
              <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $endereco; ?>" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">Telefone</label>
              <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $telefone; ?>" required>
            </div>
            <div class="mt-2 form-group col-lg-12">
              <label for="">Descrição</label>
              <textarea class="form-control" name="descricao" id="descricao" style="height: 100px;resize: none;" required><?php echo $descricao; ?></textarea>
            </div>
            <div class="mt-3 form-group col-lg-6">
              <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Atualizar">
            </div>
          </div>
        </form>
        <?php
            }
          }
        ?>
      </div>
    </section>
  </body>
</html>
