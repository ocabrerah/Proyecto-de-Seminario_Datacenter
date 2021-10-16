<?php 
$conex= mysqli_connect("localhost","id17748796_root","Edman-mendoza5485", "id17748796_proyecto");
        
include("libreria_db.php");

if (isset($_POST['enviar'])) {
	if (strlen($_POST['aire']) >= 1 
	&& strlen($_POST['incendio']) >= 1 && strlen($_POST['servidores']) >= 1 && strlen($_POST['telecom']) >= 1 && strlen($_POST['ups']) >= 1 && strlen($_POST['seguridad']) >= 1 && strlen($_POST['camaras']) >= 1 && strlen($_POST['monitoreo']) >= 1 && strlen($_POST['reporte']) >= 1) 
	
	{
		
		$aire = trim($_POST['aire']);
	    $incendio = trim($_POST['incendio']);
		$servidores = trim($_POST['servidores']);
		$telecom = trim($_POST['telecom']);
		$ups = trim($_POST['ups']);
		$seguridad = trim($_POST['seguridad']);
		$camaras = trim($_POST['camaras']);
		$monitoreo = trim($_POST['monitoreo']);
		$reporte = trim($_POST['reporte']);
	    $fechareg = date("d/m/y");


	    $consulta = "INSERT INTO rutinadiaria(aire1, incendio1, servidores1, telecom1, ups1, seguridad1, camaras1, monitoreo1, reporte1, fecha_reg) VALUES ('$aire','$incendio','$servidores','$telecom','$ups','$seguridad','$camaras','$monitoreo','$reporte','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);


	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Rutina Registrada!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡ Existe un error no se puede guardar Datos!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
	}
}

?>