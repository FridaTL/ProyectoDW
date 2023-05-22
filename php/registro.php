<?php 
include "connection.php";

if( !empty($_POST["btn_register"]) ) 
{
  if( empty( $_POST["noc"] ) or 
      empty( $_POST["nombre"] ) or 
      empty( $_POST["email"] ) or 
      empty( $_POST["pass"] ) ) 
    {
        echo "Uno de los campos estan vacios";
    }
    else 
    {

    $nombre =      $_POST["nombre"];
    $email = $_POST["email"];
    $noc = (int) $_POST["noc"];
    $pass =  $_POST["pass"];

    $sql = $connection->query("insert into 
                              user(noc,nombre,email,pass)
                              values('$noc','$nombre','$email','$pass')");
  }

}
