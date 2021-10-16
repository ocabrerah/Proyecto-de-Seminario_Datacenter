<?php
$conex= mysqli_connect("localhost","root","", "base");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['tipo']) >= 1 && strlen($_POST['Operativo']) >= 1 && strlen($_POST['Ambiente']) >= 1 && strlen($_POST['Particion']) >= 1 && strlen($_POST['Direccion']) >= 1)  {
	    $name = trim($_POST['Nombre']);
	    $Tipo = trim($_POST['Tipo']);
        $Oper = trim($_POST['Operativo']);
	    $Ambiente = trim($_POST['Ambiente']);
        $Part = trim($_POST['Particion']);
	    $Dire = trim($_POST['Direccion']);
		$Hard = trim($_POST['Hardware']);
		$Driver = trim($_POST['Driver']);
		$Anti = trim($_POST['Antivirus']);
		$Patch = trim($_POST['Parches']);
	    $Backup = trim($_POST['Backup']);
	    $Ou = trim($_POST['Ou']);
	    $Sensor = trim($_POST['Sensor']);
	    $Repre = trim($_POST['Repre']);
	    $Licen = trim($_POST['Licencia']);
	    $Respon = trim($_POST['Respon']);
	    $Fecha = trim($_POST['Fecha']);
	    $Doc = trim($_POST['Documentacion']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO altaservidor(Nombre, Tipo, Operativo, Ambiente, Particion, Direccion, Hardware, Driver, Anti, Patch, Backup, Ou, Sensor, Repre, Licen, Responsable, Fecha, Doc) VALUES ('$name','$Tipo','$Oper','$Ambiente','$Part','$Dire', '$Hard', '$Driver', '$Anti', '$Patch', '$Backup', '$Ou', '$Sensor', '$Repre', '$Licen', '$Respon', '$Fecha', '$Doc')";
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