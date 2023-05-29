<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Edificios</title>
    <link rel="stylesheet" href="styles.css">
    
    <!-- Fuentes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

  <div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large"
    onclick="w3_close()"> &times;</button>
    <a href="#" class="w3-bar-item w3-button">Edif 1</a>
    <a href="#" class="w3-bar-item w3-button">Edif 2</a>
    <a href="#" class="w3-bar-item w3-button">Edif 3</a>
  </div>

  <div>
    <div class="header-bg">
      <header class="header container">
        <button class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button>
          <div class="titulo-contenedor">
              <h1 class="titulo">Edificios</h1>
          </div>
    
          <div class="navegacion">
            <ul class="links">
              <li class="link"><a href="index.html" style="color: darkgray;">Inicio</a></li>
              <li class="link"><a href="espaciosUrbanos.html" style="color: darkgray;">Espacios Urbanos</a></li>
              <li class="link"><a href="biografias.html" style="color: darkgray;">Biografias</a></li>
            </ul>
          </div>
      </header>
    </div>
  </div>  

  <?php

include "connection.php";

 $sql = "SELECT nombre,datos,id_arqui,ubi,contextoH,descrip,foto1,foto2,foto3,corriente,materiales,contextoU,trans FROM edificacion";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["nombre"]."<br>";
        echo $row["datos"]. "<br>";
        echo $row["id_arqui"]. "<br>";
        echo $row["ubi"]. "<br>";
        echo $row["contextoH"]. "<br>";
        echo $row["descrip"]."<br>";
        echo $row["foto1"]. "<br>";
        echo $row["foto2"]. "<br>";
        echo $row["foto3"]. "<br>";
        echo $row["corriente"]. "<br>";
        echo $row["materiales"]. "<br>";
        echo $row["contextoU"]. "<br>";
        echo $row["trans"]. "<br>";
    }
} else {
    echo "0 results";
}
?>



<script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
</script>



</body>


</html>