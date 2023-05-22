<?php

include "connection.php";

if( !empty($_POST["enviar"]) ) 
{
  if( empty( $_POST["nombre"] ) or 
      empty( $_POST["anioN"] ) or 
      empty( $_POST["anioM"] ) or 
      empty( $_POST["ciudad"] ) or 
      empty( $_POST["escuela"] ) or 
      empty( $_POST["disciplina"] ) or 
      empty( $_POST["obras"] ) or 
      empty( $_POST["elementos"] ) ) 
    {
        echo "Uno de los campos estan vacios";
    }
    else 
    {

    $nombre = $_POST["nombre"];
    $anioN = (int) $_POST["anioN"];
    $anioM = (int) $_POST["anioM"];
    $ciudad = $_POST["ciudad"]; 
    $escuela = $_POST["escuela"]; 
    $disciplina = $_POST["disciplina"]; 
    $obras  = (int) $_POST["obras"];
    $elementos = $_POST["elementos"]; 

   
    $sql = $connection->query("insert into 
                              biografias(nombre, anioN, anioM, ciudad, escuela, disciplina, obras, elementos)
                              values('$nombre','$anioN','$anioM','$ciudad', '$escuela','$disciplina','$obras','$elementos')");
    }

}


?>