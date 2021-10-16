<!DOCTYPE html>
<html>
    <head>
        <title> Registrar Formulario> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type= "text/css" href="conf.css">
</head>
<body>
    <form method="post">
        <h1> Alta de Usuario </h1>
        <input type ="text" name="Codigo" placeholder="Codigo del empleado">
        <input type ="text" name="Nombre" placeholder="Nombre del empleado">
        <input type ="text" name="Puesto" placeholder="Puesto">
        <input type ="text" name="Organizacion" placeholder="Organizacion">
        <input type ="text" name="Tel" placeholder="Telefono">
        <input type ="text" name="Correo" placeholder="Acceso a correo por celular">
        <input type ="text" name="Internet" placeholder="Internet libre">
        <input type ="text" name="VPN" placeholder="Acceso por VPN">
        <input type ="text" name="Operador" placeholder="Operador responsable">
        <input type ="text" name="Solicitante" placeholder="Solicitante">        
        <input type ="text" name="Fecha" placeholder="Fecha de eliminacion">
        <input type ="submit" name="Registrar">
</form>
<?php
include("Servidor.php")
?>
</body>
</html>