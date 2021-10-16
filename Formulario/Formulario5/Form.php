<!DOCTYPE html>
<html>
    <head>
        <title> Registrar Formulario> </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type= "text/css" href="conf.css">
</head>
<body>
    <form method="post">
        <h1> Acceso a DataCenter </h1>
        <input type ="text" name="Nombre" placeholder="Nombre">
        <input type ="text" name="DPI" placeholder="Numero del Documento personal de Identificacion(DPI) ">
        <input type ="text" name="Visita" placeholder="Area a visitar">
        <input type ="text" name="Autorizacion" placeholder="Autorizado por">
        <input type ="text" name="Acomp" placeholder="Acompañado por">
        <input type ="text" name="Motivo" placeholder="Motivo de la visita">      
        <input type ="text" name="Fecha" placeholder="Fecha">
        <input type ="submit" name="Registrar">
</form>
<?php
include("Servidor.php")
?>
</body>
</html>