<?php 
$conexion=mysql_connect("localhost","root","class") or die ("No se pudo conectar");
	mysql_select_db("cirugias", $conexion) or die ("No se puede seleccionar la base de datos");

//if(isset($_POST['a'])){
$id=1;//$_POST['a'];
//}
$consulta=mysql_query("SELECT p.nombre, p.nss,p.padecimiento, c.idquirofano as num_quirofano, c.fechainicio, q.especificaciones FROM pacientes as p, cirugia as c, quirofano as q where p.idpaciente='$id' and p.idcirugia=c.idcirugia and c.idquirofano=q.idquirofano");
if($id=mysql_fetch_array($consulta)){
	echo "NSS ENCONTRADO! <br/>";
?>	
<table width='100' border='1'>
		  <tr>
			<td>Paciente</td>
			<td><?php echo $id['nombre'];?></td>
		  </tr>
		  <tr>
			<td>NSS</td>
			<td><?php echo $id['nss'];?></td>
		  </tr>
		  <tr>
			<td>Padecimiento</td>
			<td><?php echo $id['padecimiento'];?></td>
		  </tr>
		  <tr>
			<td>Fecha</td>
			<td><?php echo $id['fechainicio'];?></td>
		  </tr>
		  <tr>
			<td>Quirofano</td>
			<td><?php echo $id['idquirofano'];?></td>
		  </tr>
          <tr>
			<td>Tipo</td>
			<td><?php echo $id['especificaciones'];?></td>
		  </tr>
		</table>

<?php
	}else{
		echo "id no existe!";
		}

	
?>
