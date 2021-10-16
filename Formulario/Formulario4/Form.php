<!DOCTYPE html>
<html>
    <head>
        <title> Registrar Formulario> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type= "text/css" href="conf.css">
</head>
<body>
    <form method="post">
        <h1> Baja de Usuario </h1>
        <input type ="text" name="Codigo" placeholder="Codigo del empleado">
        <input type ="text" name="Nombre" placeholder="Nombre del empleado">
        <input type ="text" name="Puesto" placeholder="Puesto">
        <input type ="text" name="Organizacion" placeholder="Organizacion">
        <input type ="text" name="Tel" placeholder="Telefono">
        <input type ="text" name="Correo" placeholder="Acceso a correo por celular">
        <input type ="text" name="Grupo" placeholder="Grupos precedentes">
        <input type ="text" name="Cuenta" placeholder="Desabilitar cuenta">
        <input type ="text" name="CPU" placeholder="Traslado del CPU">
        <input type ="text" name="Responsable" placeholder="Responsable">        
        <input type ="text" name="Fecha" placeholder="Fecha">
        <input type ="submit" name="Registrar">
</form>
<?php
include("Servidor.php")
?>
</body>
</html>