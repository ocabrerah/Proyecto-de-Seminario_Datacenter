<?php
$conex= mysqli_connect("localhost","root","", "base");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['Codigo']) >= 1 && strlen($_POST['Nombre']) >= 1 && strlen($_POST['Puesto']) >= 1 && strlen($_POST['Organizacion']) >= 1 && strlen($_POST['Tel']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Grupo']) >= 1 && strlen($_POST['Cuenta']) >= 1 && strlen($_POST['CPU']) >= 1 && strlen($_POST['Responsable']) >= 1 && strlen($_POST['Fecha']) >= 1)  {
	    $Codigo = trim($_POST['Codigo']);
	    $Nombre = trim($_POST['Nombre']);
        $Pos = trim($_POST['Puesto']);
	    $Org = trim($_POST['Organizacion']);
        $Tel = trim($_POST['Tel']);
	    $Correo = trim($_POST['Correo']);
		$Grupo = trim($_POST['Grupo']);
	    $Cuenta = trim($_POST['Cuenta']);
	    $CPU = trim($_POST['CPU']);
	    $Respon = trim($_POST['Responsable']);
	    $Fecha = trim($_POST['Fecha']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO baja(Codigo, Nombre, Puesto, Organizacin, Tele, Correoo, Grupo, Cuenta, CPU, Respon, Fecha) VALUES ('$Codigo','$Nombre','$Pos','$Org','$Tel','$Correo', '$Grupo', '$Cuenta', '$CPU', '$Respon', '$Fecha')";
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