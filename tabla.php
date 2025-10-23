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
    <table>
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
  </body>
</html>
