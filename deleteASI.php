<?php

include("conexionASI.php");
$con=conectar();

if(isset($_GET['id_asig'])) {
  $id_asig = $_GET['id_asig'];
  $query = "DELETE FROM asignaturas WHERE id_asig='$id_asig'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: asignaturas.php"); 
}

?>