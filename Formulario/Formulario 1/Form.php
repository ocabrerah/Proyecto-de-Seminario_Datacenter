<!DOCTYPE html>
<html>
    <head>
        <title> Registrar Formulario> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type= "text/css" href="conf.css">
</head>
<body>
    <form method="post">
        <h1> Alta de servidor </h1>
        <input type ="text" name="Nombre" placeholder="Nombre">
        <input type ="text" name="Tipo" placeholder="Tipo de servidor">
        <input type ="text" name="Operativo" placeholder="Sistema Operativo de la computadora">
        <input type ="text" name="Ambiente" placeholder="Ambiente de QA, Produccion o desarrollo">
        <input type ="text" name="Particion" placeholder="Creacuib de particiones">
        <input type ="text" name="Direccion" placeholder="Direccion IP">
        <input type ="text" name="Hardware" placeholder="Actualizacion de Hardware">
        <input type ="text" name="Driver" placeholder="Actualizacion de Drivers">
        <input type ="text" name="Antivirus" placeholder="Instalacion de Antiviruz">
        <input type ="text" name="Parches" placeholder="Instalacion de parches">
        <input type ="text" name="Backup" placeholder="Configuracion de Backups">   
        <input type ="text" name="Ou" placeholder="Asignacion de OU">
        <input type ="text" name="Sensor" placeholder="Sensores de Monitoreo">
        <input type ="text" name="Repre" placeholder="Etiquetado o Nombre representativo">
        <input type ="text" name="Licencia" placeholder="Activacion de licencia">
        <input type ="text" name="Respon" placeholder="Nombre del responsable">
        <input type ="text" name="Fecha" placeholder="Fecha de creacion">
        <input type ="text" name="Documentacion" placeholder="Registro en documentacion de servicios">
        <input type ="submit" name="Registrar">
</form>
<?php
include("Servidor.php")
?>
</body>
</html>