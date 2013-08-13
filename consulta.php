<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery Mobile: Theme Download</title>
		<link rel="stylesheet" href="themes/tema.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>Hospital Medico Siglo XXI</h1>
			</div>
			<div data-role="content" data-theme="a">
				<?php
$conexion=mysql_connect("localhost","root","class") or die ("No se pudo conectar");
	mysql_select_db("cirugias") or die ("No se puede seleccionar la base de datos");
	
	if(isset($_POST["texto"])){
		$texto=$_POST["texto"];
		$result=mysql_query("SELECT nombre,nss FROM pacientes WHERE nss='$texto'" );
		$res=mysql_num_rows($result);
		 
		
			if($res==0){
				echo "Ninguna cirugia pendiente!!! <br />";				
			} else {
				echo "CIRUGIA PENDIENTE";
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