<?php

include "connection.php";


if( !empty($_POST["btn_ed"]) ) 
{
  if( empty( $_POST["nombre"] ) or 
      empty( $_POST["datos"] ) or
      empty( $_POST["id_arqui"] ) or 
      empty( $_POST["ubi"] ) or
      empty( $_POST["contextoH"] ) or
      empty( $_POST["descrip"] ) or
      empty( $_POST["foto1"] ) or
      empty( $_POST["foto2"] ) or
      empty( $_POST["foto3"] ) or
      empty( $_POST["corriente"] ) or
      empty( $_POST["materiales"] ) or
      empty( $_POST["contextoU"] ) or     
      empty( $_POST["trans"] ) ) 
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
    $descrip = $_POST["descrip"];
    $foto1 = (int)$_POST["foto1"];
    $foto2 = (int)$_POST["foto2"];
    $foto3 = (int)$_POST["foto3"];
    $corriente = $_POST["corriente"];
    $materiales = $_POST["materiales"];
    $contextoU = $_POST["contextoU"];
    $trans = $_POST["trans"];

    $sql = $connection->query("insert into 
                              edificacion(nombre,datos,id_arqui,ubi,contextoH,descrip,
                              foto1,foto2,foto3,corriente,materiales,contextoU,trans)
                              values('$nombre','$datos','$id_arqui','$ubi','$contextoH','$descrip',
                              '$foto1','$foto2','$foto3','$corriente','$materiales','$contextoU','$trans')");
  }

}


?>