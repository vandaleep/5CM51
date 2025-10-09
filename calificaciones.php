<?php
	$alumnitos = ["2023600754" => "AGUILAR REYES JOSE CARLOS",
				"2020602594" => "AVIÑA HERNANDEZ ANGEL",
				"2024600453" => "BARAJAS GERARDO ADRIAN",
				"2024602515" => "CARMONA GONZALEZ CESAR LEROY",
				"2024600361" => "CASTAÑO SALDIVAR DANIELA ALESSANDRA",
				"2024600099" => "CASTILLO SANTIAGO AILYN MERCEDES",
				"2024600148" => "COLIN SANTILLAN ANDRE ALEJANDRO",
				"2024600520" => "CORTES REYES SAMANTHA",
				"2024600238" => "DE LA CRUZ BARAJAS OSVALDO FELIPE",
				"2024350699" => "DE LA CRUZ VASQUEZ BRAYAN",
				"2024600370" => "ELIZALDE ALFARO VERONICA GRACIELA"];
?>


<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
		function calcular() {
			let c1 = document.getElementById("c1");
			let v1 = parseInt(c1.value);
			let c2 = document.getElementById("c2");
			let v2 = parseInt(c2.value);
			let c3 = document.getElementById("c3");
			let v3 = parseInt(c3.value);
			let c4 = document.getElementById("c4");
			let v4 = parseInt(c4.value);
			let c5 = document.getElementById("c5");
			let v5 = parseInt(c5.value);
			let c6 = document.getElementById("c6");
			let v6 = parseInt(c6.value);
			let c7 = document.getElementById("c7");
			let v7 = parseInt(c7.value);
			let c8 = document.getElementById("c8");
			let v8 = parseInt(c8.value);
			let c9 = document.getElementById("c9");
			let v9 = parseInt(c9.value);
			let c10 = document.getElementById("c10");
			let v10 = parseInt(c10.value);
			
			let prom = (v1+v2+v3+v4+v5+v6+v7+v8+v9+v10)/10;
			
			alert("promedio: " + prom);
		}
    
    </script>
    
  </head>
  <body>
    <table>
	  <tr>
		<th>Boleta</th><th>Nombre</th><th>Calificación</th>
      </tr>
      <!-- AQUI -->
      <?php $i=1; ?>
      <?php foreach($alumnitos as $boleta => $nombre): ?>
		  <tr>
			<td><?php echo $boleta ?></td>
			<td><?php echo $nombre ?></td>
			<td><input id="c<?php echo $i; $i++;?>" value="0" type="number" min=0 max=10></td>
		  </tr>
		  <!-- AQUI Termina -->
      <?php endforeach ?>
    </table>
    <button onclick="calcular()">Enviar</button>
  </body>
</html>
