<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="themes/tema.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.structure-1.3.2.min.css" />
		<script src="themes/jquery-1.9.1.min.js"></script>
		<script src="themes/jquery.mobile-1.3.2.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h3>Hospital Médico Siglo XXI</h3>
			</div>
			<div data-role="content" data-theme="a">
				<?php 
$conexion=mysql_connect("mysql.hostinger.mx","u325210545_root","Class.1") or die ("No se pudo conectar");
	mysql_select_db("u325210545_quiro", $conexion) or die ("No se puede seleccionar la base de datos");
	
	if(isset($_POST["texto"])){
		$texto=$_POST["texto"];
		$result=mysql_query("SELECT nombre,nss FROM pacientes WHERE nss='$texto'" );
		$dato=mysql_fetch_array($result);

	if ($dato==""){
		echo "Ninguna cirugia pendiente!!! <br />";
	}
		else{
				echo "CIRUGIA PENDIENTE";
				echo $result;
		}

											
	}
	
?>
<a href="index.html">
	<input name="volver" type="button" value="Volver" />
</a>
			</div>
		</div>
	</body>
</html>