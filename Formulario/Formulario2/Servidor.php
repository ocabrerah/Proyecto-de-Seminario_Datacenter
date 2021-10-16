<?php
$conex= mysqli_connect("localhost","root","", "base");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Tipo']) >= 1 && strlen($_POST['Operativo']) >= 1 && strlen($_POST['Ambiente']) >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['Backup']) >= 1 && strlen($_POST['Ou']) >= 1 && strlen($_POST['Sensores']) >= 1 && strlen($_POST['Administrador']) >= 1 && strlen($_POST['DNS']) >= 1 && strlen($_POST['Fecha']) >= 1)  {
	    $Nombre = trim($_POST['Nombre']);
	    $Tipo = trim($_POST['Tipo']);
        $Ope = trim($_POST['Operativo']);
	    $Amb = trim($_POST['Ambiente']);
        $Dir = trim($_POST['Direccion']);
	    $Backup = trim($_POST['Backup']);
		$Ou = trim($_POST['Ou']);
	    $Sensores = trim($_POST['Sensores']);
	    $Admin = trim($_POST['Administrador']);
	    $DNS = trim($_POST['DNS']);
	    $Fecha = trim($_POST['Fecha']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO servidor(Nombre, Tipo, SistemaOp, Ambiente, IP, Backups, Ou, SensoresMoni, Administrador, DNS, Fecha) VALUES ('$Nombre','$Tipo','$Ope','$Amb','$Dir','$Backup', '$Ou', '$Sensores', '$Admin', '$DNS', '$Fecha')";
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