<?php ini_set('display_errors', E_ALL);

function insertar($creds, $query) {
	$id = 0;
	
	$cnx = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
	mysqli_query($cnx, $query);
	$id = mysqli_insert_id($cnx);
	mysqli_close($cnx);
	
	return $id;
}

function seleccionar($creds, $query) {
	$regs = [];
	
	$cnx = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
	$res = mysqli_query($cnx, $query);
	while ($registro = mysqli_fetch_row($res) ) {
		$regs[] = $registro;
	}
	mysqli_free_result($res);
	mysqli_close($cnx);
	
	return $regs;
}

function actualizar($creds, $query) {
	$res = false;
	
	$cnx = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
	$res = mysqli_query($cnx, $query);
	mysqli_close($cnx);
	
	return $res;
}

function eliminar($creds, $query) {
	$res = false;
	
	$cnx = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
	$res = mysqli_query($cnx, $query);
	mysqli_close($cnx);
	
	return $res;
}

//En archivos de librería NO se cierra 
