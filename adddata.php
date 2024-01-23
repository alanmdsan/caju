<?php
  require_once('conn.php');
  if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];

    if ($nome != '' && $cnpj != '' && $endereco != '' && $telefone != '' && $descricao != '') {
      
      $sql = "INSERT INTO restaurantes (`nome`, `descricao`, `cnpj`, `endereco`, `telefone`) VALUES ('$nome', '$descricao', '$cnpj', '$endereco', '$telefone')";
      
      if (mysqli_query($conn, $sql)) {
        header('location: index.php');
      } else {
        echo 'Algo deu errado. Tente novamente mais tarde.';
      }
    } else {
      echo 'Nome, endereço, telefone, CNPJ e descrição devem ser preenchidos!';
    }
  }
?>