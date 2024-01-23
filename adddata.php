<?php
  include_once('./src/models/Connection.php');

  if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];

    if ($nome != '' && $cnpj != '' && $endereco != '' && $telefone != '' && $descricao != '') {
      try {
        $stmt = Connection::getConnection()->prepare('INSERT INTO restaurantes (nome, cnpj, endereco, telefone, descricao) 
                                                      VALUES(:nome, :cnpj, :endereco, :telefone, :descricao)');
        $stmt->execute(array(
          ':nome' => $nome,
          ':cnpj' => $cnpj,
          ':endereco' => $endereco,
          ':telefone' => $telefone,
          ':descricao' => $descricao
        ));

        header('location: index.php');
      } catch (PDOException $e) {
        echo 'Algo deu errado. Tente novamente mais tarde. ' . $e->getMessage();
      }
    } else {
      echo 'Nome, endereço, telefone, CNPJ e descrição devem ser preenchidos!';
    }
  }
?>