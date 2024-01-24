<?php
  include_once('../models/Restaurante.php');
  
  try {
    $restaurante = new Restaurante();
    $restaurante->delete($_GET['id']);
    
    header('location: ../../index.php');
  } catch (PDOException $e) {
    echo 'Algo deu errado. Tente novamente mais tarde. ' . $e->getMessage();
  }
?>