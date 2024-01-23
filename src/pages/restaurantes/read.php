<?php
include('./src/models/Restaurante.php');

$restaurante = new Restaurante();
var_dump($restaurante->getAll());

?>