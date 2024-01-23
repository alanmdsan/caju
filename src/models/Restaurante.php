<?php
require_once('./src/models/Database.php');

class Restaurante {
    private $db;
    private $id;
    private $nome;
    private $descricao;
    private $cnpj;
    private $endereco;
    private $telefone;

    function __construct() {
        $this->db = Database::getInstance();
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getID() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ() {
        return $this->cnpj;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getAll() {
        $restaurantes = [];

        $sql = 'SELECT * FROM restaurantes';

        $result = $this->db->query($sql);
    
        $result_check = mysqli_num_rows($result);
    
        if ($result_check > 0) {
            $restaurantes = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    
        return $restaurantes;
    }
}
?>