<?php
	include "mysqlaux.php";
	
	$datos = seleccionar(["localhost", "root", "toor", "pruebas"], "SELECT * FROM producto");
?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Productos existentes</h1>
    <table border>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
		  <?php foreach($datos as $dato):?>
			<tr>
				<td><?php echo $dato[0] ?></td>
				<td><?php echo $dato[1] ?></td>
				<td><?php echo $dato[2] ?></td>
				<td><?php echo $dato[3] ?></td>
			</tr>
		  <?php endforeach ?>
		</tbody>
    </table>

    <h1>Nuevo Registro</h1>
    <form action="nuevo.php" method="post">
      <label>Nombre</label>
      <input name="nombre"><br>
      <label>Precio</label>
      <input name="precio"><br>
      <label>Descripción</label>
      <input name="descripcion"><br>
      <input type="submit" value="Agregar nuevo">
    </form>
  </body>
</html>
