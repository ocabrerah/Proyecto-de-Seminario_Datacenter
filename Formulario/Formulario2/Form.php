<!DOCTYPE html>
<html>
    <head>
        <title> Registrar Formulario> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type= "text/css" href="conf.css">
</head>
<body>
    <form method="post">
        <h1> Baja de servidor </h1>
        <input type ="text" name="Nombre" placeholder="Nombre">
        <input type ="text" name="Tipo" placeholder="Tipo de servidor">
        <input type ="text" name="Operativo" placeholder="Sistema Operativo de la computadora">
        <input type ="text" name="Ambiente" placeholder="Ambiente de QA, Produccion o desarrollo">
        <input type ="text" name="Direccion" placeholder="Direccion IP">
        <input type ="text" name="Backup" placeholder="Backup a eliminar">
        <input type ="text" name="Ou" placeholder="Registar la OU de donde pertenece">
        <input type ="text" name="Sensores" placeholder="Eliminacion de sensores de monitoreo">
        <input type ="text" name="Administrador" placeholder="Responsable de quien Administra">
        <input type ="text" name="DNS" placeholder="Eliminacion de DNS">        <input type ="text" name="Backup" placeholder="Empresa de origen">
        <input type ="text" name="Fecha" placeholder="Fecha de eliminacion">
        <input type ="submit" name="Registrar">
</form>
<?php
include("Servidor.php")
?>
</body>
</html>