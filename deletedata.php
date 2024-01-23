<?php
  require_once('conn.php');
  $id = $_GET['id'];
  $query = "DELETE FROM restaurantes WHERE id = '$id'";
  if (mysqli_query($conn, $query)) {
    header('location: index.php');
  } else {
    echo 'Algo deu errado. Tente novamente mais tarde.';
  }
?>