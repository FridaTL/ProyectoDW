<?php

include "connection.php";


if( !empty($_POST["btn_ur"]) ) 
{
  if( empty( $_POST["nombre"] ) or 
      empty( $_POST["datos"] ) or
      empty( $_POST["id_arqui"] ) or 
      empty( $_POST["ubi"] ) or
      empty( $_POST["contextoH"] ) or
      empty( $_POST["descr"] ) or
      empty( $_POST["trans"] ) or 
      empty( $_POST["foto1"] ) or
      empty( $_POST["foto2"] ) or
      empty( $_POST["foto3"] ) or
      empty( $_POST["principios"] ) or   
      empty( $_POST["importancia"] ) ) 
    {
        echo "Uno de los campos estan vacios";
    }
    else 
    {

    $nombre = $_POST["nombre"];
    $datos = $_POST["datos"];
    $id_arqui = $_POST["id_arqui"];
    $ubi = $_POST["ubi"];
    $contextoH = $_POST["contextoH"];
    $descr = $_POST["descr"];
    $trans = $_POST["trans"];
    $foto1 = (int)$_POST["foto1"];
    $foto2 = (int)$_POST["foto2"];
    $foto3 = (int)$_POST["foto3"];
    $principios = $_POST["principios"];
    $importancia = $_POST["importancia"];
    

    $sql = $connection->query("insert into 
                              urbanismo(nombre,datos,id_arqui,ubi,contextoH,descr,
                              trans,foto1,foto2,foto3,principios,importancia)
                              values('$nombre','$datos','$id_arqui','$ubi','$contextoH','$descr','$trans',
                              '$foto1','$foto2','$foto3','$principios','$importancia')");
  }

}


?>