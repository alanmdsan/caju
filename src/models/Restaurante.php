<?php

include_once('Connection.php');

class Restaurante {
    private $id;
    private $nome;
    private $descricao;
    private $cnpj;
    private $endereco;
    private $telefone;

    function __construct() {}

    public function create($data) {
      $sql_query = 'INSERT INTO restaurantes (nome, cnpj, endereco, telefone, descricao) 
                    VALUES(:nome, :cnpj, :endereco, :telefone, :descricao)';

      $stmt = Connection::getConnection()->prepare($sql_query);

      return $stmt->execute(array(
        ':nome' => $data['nome'],
        ':cnpj' => $data['cnpj'],
        ':endereco' => $data['endereco'],
        ':telefone' => $data['telefone'],
        ':descricao' => $data['descricao']
      ));
    }

    public function update($data) {
      $sql_query = 'UPDATE restaurantes 
                    SET nome = :nome, 
                        cnpj = :cnpj, 
                        endereco = :endereco, 
                        telefone = :telefone, 
                        descricao = :descricao 
                    WHERE id = :id';

      $stmt = Connection::getConnection()->prepare($sql_query);
      
      return $stmt->execute(array(
        ':id' => $data['id'],
        ':nome' => $data['nome'],
        ':cnpj' => $data['cnpj'],
        ':endereco' => $data['endereco'],
        ':telefone' => $data['telefone'],
        ':descricao' => $data['descricao']
      ));
    }

    public function delete($id) {
      $sql_query = 'DELETE FROM restaurantes WHERE id = ?';
      $stmt = Connection::getConnection()->prepare($sql_query);
      return $stmt->execute([$id]);
    }

    public function get($id) {
      $sql_query = 'SELECT * FROM restaurantes WHERE id = ?';
      $stmt = Connection::getConnection()->prepare($sql_query);
      $stmt->execute([$id]); 
      return $stmt->fetch();
    }

    public function getAll() {
        $sql_query = "SELECT * FROM restaurantes";
        $result = Connection::getConnection()->query($sql_query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>