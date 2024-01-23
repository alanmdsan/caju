<?php
  include_once('./src/models/Connection.php');
  
  $stmt = Connection::getConnection()->prepare('DELETE FROM restaurantes WHERE id = ?');
  
  try {
    $stmt->execute([$_GET['id']]);
    
    header('location: index.php');
  } catch (PDOException $e) {
    echo 'Algo deu errado. Tente novamente mais tarde. ' . $e->getMessage();
  }
?>