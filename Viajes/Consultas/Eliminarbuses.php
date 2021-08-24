<?php 

require_once'../Conexiones/conexion.php';
// HAY QUE VALIDAR QUE LAs$buses TENGA PLACA UNICA 

$buses=$_GET["accion"];

$sql="DELETE froms$busess WHERE Placa=:accion";

$stmt=$pdo->prepare($sql);


	if ($stmt->execute([
	':accion'=>s$buses
	
		]));
	
{
	echo "<script> alert('eliminado ');
	window.location.href='../Acceso.php';
</script>" ;

}

?>
