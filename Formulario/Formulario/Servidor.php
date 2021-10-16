<?php
$conex= mysqli_connect("localhost","root","", "base");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['ape']) >= 1 && strlen($_POST['lugar']) >= 1 && strlen($_POST['Empresa']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['Comp']) >= 1)  {
	    $name = trim($_POST['name']);
	    $ape = trim($_POST['ape']);
        $lugar = trim($_POST['lugar']);
	    $Empresa = trim($_POST['Empresa']);
        $edad = trim($_POST['edad']);
	    $Comp = trim($_POST['Comp']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO registros(Nombre, apellido, fecha_registro, lugar, Empresa, Edad, Comp) VALUES ('$name','$ape','$lugar','$Empresa','$edad','$Comp', '$fechareg')";
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