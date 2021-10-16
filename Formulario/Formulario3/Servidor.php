<?php
$conex= mysqli_connect("localhost","root","", "base");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['Codigo']) >= 1 && strlen($_POST['Nombre']) >= 1 && strlen($_POST['Puesto']) >= 1 && strlen($_POST['Organizacion']) >= 1 && strlen($_POST['Tel']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Internet']) >= 1 && strlen($_POST['VPN']) >= 1 && strlen($_POST['Operador']) >= 1 && strlen($_POST['Solicitante']) >= 1 && strlen($_POST['Fecha']) >= 1)  {
	    $Codigo = trim($_POST['Codigo']);
	    $Nombre = trim($_POST['Nombre']);
        $Pos = trim($_POST['Puesto']);
	    $Org = trim($_POST['Organizacion']);
        $Tel = trim($_POST['Tel']);
	    $Correo = trim($_POST['Correo']);
		$Inter = trim($_POST['Internet']);
	    $VPN = trim($_POST['VPN']);
	    $Op = trim($_POST['Operador']);
	    $Sol = trim($_POST['Solicitante']);
	    $Fecha = trim($_POST['Fecha']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO alta(Codigo, Nombre, Puesto, Organizacion, Tel, Correo, Internet, VPN, Operador, Solicitante, Fecha) VALUES ('$Codigo','$Nombre','$Pos','$Org','$Tel','$Correo', '$Inter', '$VPN', '$Op', '$Sol', '$Fecha')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Registro Guardado</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Error de registro</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad"> Se necesita varios parametros</h3>
           <?php
    }
}
?>