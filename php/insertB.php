<?php

include "connection.php";


if( !empty($_POST["btn_bio"]) ) 
{
  if( empty( $_POST["nombre"] ) or 
      empty( $_POST["nacimiento"] ) or
      empty( $_POST["escuela"] ) or
      empty( $_POST["obras"] ) or
      empty( $_POST["elementos"] ) ) 
    {
        echo "Uno de los campos estan vacios";
    }
    else 
    {

    $nombre = $_POST["nombre"];
    $nacimiento = $_POST["nacimiento"];
    $escuela = $_POST["escuela"];
    $obras = $_POST["obras"];
    $elementos = $_POST["elementos"];

    $sql = $connection->query("insert into 
                              biografias(nombre,nacimiento, escuela,
                              obras, elementos)
                              values('$nombre','$nacimiento','$escuela','$obras','$elementos')");
  }
}


?>
