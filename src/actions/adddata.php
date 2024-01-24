<?php
  include_once('../models/Restaurante.php');

  if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];

    if ($nome != '' && $cnpj != '' && $endereco != '' && $telefone != '' && $descricao != '') {
      try {
        $restaurante = new Restaurante();
        $data = [
          'nome' => $nome,
          'cnpj' => $cnpj,
          'endereco' => $endereco,
          'telefone' => $telefone,
          'descricao' => $descricao
        ];
        $restaurante->create($data);

        header('location: ../../index.php');
      } catch (PDOException $e) {
        echo 'Algo deu errado. Tente novamente mais tarde. ' . $e->getMessage();
      }
    } else {
      echo 'Nome, endereço, telefone, CNPJ e descrição devem ser preenchidos!';
    }
  }
?>