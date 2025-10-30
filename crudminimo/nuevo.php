<?php
    include "mysqlaux.php";

    if (isset($_POST["nombre"]) && $_POST["precio"]) {
      //Sigo con la inserción
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $descripcion = isset($_POST["descripcion"]) ?? "";

      $query = "INSERT into producto (nombre, precio, descripcion) values ('$nombre','$precio','$descripcion')";
      $id = insertar(["localhost", "root", "toor", "pruebas"], $query);

      if ($id !=0) {
        echo "<h1>Exito. Registro insertado correctamente</h1>";
        echo "<a href='lista.php'>Regresar</a>";
      } else {
        echo "<h1>Error. Contacta con el admon</h1>";
        echo "<a href='lista.php'>Regresar</a>";
      }

    } else {
      echo "<h1>Error en la consistencia de datos</h1>";
      echo "<a href='lista.php'>Regresar</a>";
    }
?>
