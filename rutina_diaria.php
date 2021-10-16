<!DOCTYPE html>
<html>
<head>
	<title>RUTINA DIARIA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo1.css">
</head>
<body>
    <form method="post">
    	<h1>RUTINA DIARIA</h1>
    
		<input type="text" name="aire" placeholder="Aires de Conford">
    	<input type="text" name="incendio" placeholder="Sistema Contra Incendio">
		<input type="text" name="servidores" placeholder="Revision de Gabinete de servidores">
    	<input type="text" name="telecom" placeholder="Revision de Gabinete de Telecomunicaciones">
		<input type="text" name="ups" placeholder="Revision Carga de UPS">
    	<input type="text" name="seguridad" placeholder="Revision de Sistema de Seguridad">
		<input type="text" name="camaras" placeholder="Revision de Camaras">
    	<input type="text" name="monitoreo" placeholder="Revision de Pantallas de Monitoreo">
		<input type="text" name="reporte" placeholder="Reportes de lo encontrado">


    	<input type="submit" name="enviar">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>