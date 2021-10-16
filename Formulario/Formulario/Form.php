<!DOCTYPE html>
<html>
    <head>
        <title> Registrar Formulario> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type= "text/css" href="conf.css">
</head>
<body>
    <form method="post">
        <h1> Formulario de persona </h1>
        <input type ="text" name="name" placeholder="Nombre">
        <input type ="text" name="ape" placeholder="apellido">
        <input type ="text" name="lugar" placeholder="Lugar">
        <input type ="text" name="Empresa" placeholder="Empresa">
        <input type ="text" name="edad" placeholder="Edad">
        <input type ="text" name="Comp" placeholder="Empresa de origen">


        <input type ="submit" name="Registrar">
</form>
<?php
include("Servidor.php")
?>
</body>
</html>