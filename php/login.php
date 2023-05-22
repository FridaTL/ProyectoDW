<?php
include "connection.php";

session_start();

if ( !empty( $_POST["btn_login"] ) ) {

  if( !empty( $_POST["nombre"] ) and !empty( $_POST["pass"] ) ) {
    $user = $_POST["nombre"];
    $password = $_POST["pass"];

    $sql = $connection->query(" select * from users where user_name='$user' and password='$password' ");

    if( $datos = $sql->fetch_object() ){
      $_SESSION["id"] = $datos->id;
      $_SESSION["name"] = $datos->name;
      $_SESSION["last_name"] = $datos->last_name;

      header("location: principal.php");
    } else {
      echo "<div>Acceso denegado</div>";
    }

  } else {
    echo "Ambos campos son obligatorios";
  }

}


?>