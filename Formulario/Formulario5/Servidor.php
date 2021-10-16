<?php
$conex= mysqli_connect("localhost","root","", "base");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['DPI']) >= 1 && strlen($_POST['Visita']) >= 1 && strlen($_POST['Autorizacion']) >= 1 && strlen($_POST['Acomp']) >= 1 && strlen($_POST['Motivo']) >= 1 && strlen($_POST['Fecha']) >= 1)  {
	    $Nombre = trim($_POST['Nombre']);
	    $DPI = trim($_POST['DPI']);
        $Visita = trim($_POST['Visita']);
	    $Auto = trim($_POST['Autorizacion']);
        $Acom = trim($_POST['Acomp']);
	    $Motivo = trim($_POST['Motivo']);
	    $Fecha = trim($_POST['Fecha']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO visitas(Nombre, DPI, Visita, Autor, Acomp, Motivo, Fecha) VALUES ('$Nombre','$DPI','$Visita','$Auto','$Acom','$Motivo', '$Fecha')";
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