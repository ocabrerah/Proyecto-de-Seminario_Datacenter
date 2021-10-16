<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Visualizar</title>
    <nav>
        <ul>
            <li><a href="index.html"><span class="primero"><i class="icon icon-house"></i></span>Inicio</a></li>
            <li><a href="#"><span class="segundo"><i class="icon icon-tag"></i></span>Procedimientos</a>
                <ul>
                    <li><a href="https://repositoriodatacenter.000webhostapp.com/documentos/#Accesos">Accesos</a></li>
                    <li><a href="https://repositoriodatacenter.000webhostapp.com/documentos/#Alertas">Alertas</a></li>
                    <li><a href="https://repositoriodatacenter.000webhostapp.com/documentos/#Hardware">Hardware</a></li>
                    <li><a href="https://repositoriodatacenter.000webhostapp.com/documentos/#Imprevistos">Imprevistos</a></li>
                </ul>
            </li>
            <li><a href="index.php"><span class="tercero"><i class="icon icon-suitcase"></i></span>Seguridad</a></li>
            <li><a href="rutinas.html"><span class="cuarto"><i class="icon icon-text"></i></span>Rutinas</a></li>
            <li><a href="https://repositoriodatacenter.000webhostapp.com/documentos/#Mantenimiento"><span class="quinto"><i class="icon icon-mail"></i></span>Mantenimientos</a></li>
            <li><a href="bitacoras.html"><span class="sexto"><i class="icon icon-mail"></i></span>Bitácoras</a></li>
            <li><a href="#"><span class="septimo"><i class="icon icon-mail"></i></span>Formularios</a>
                <ul>
                    <li><a href="form_empresa.html">Empresa</a></li>
                    <li><a href="#">form2</a></li>
                    <li><a href="#">form3</a></li>
                </ul>
            </li>
            <li><a href="#"><span class="octavo"><i class="icon icon-mail"></i></span>Más</a>
                <ul>
                    <li><a href="visualizar_form.php">Visualizar Formulario Empresa</a></li>
                    <li><a href="#">form2</a></li>
                    <li><a href="#">form3</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</head>
<body>
        
    <?php
    include("libreria_db.php");
    $stmt = $pdo->query("SELECT nombre, telefono, correo, direccion, tempresa FROM empresa");
    ?>
    <table BORDER=3 CELLSPACING=2 CELLPADDING=5 width=500 ><br><br><br><br>
    <tr><td>&nbsp;<B>Nombre</B></td> <td>&nbsp;<B>Teléfono</B>&nbsp;</td> <td>&nbsp;<B>Correo</B>&nbsp;</td> <td>&nbsp;<B>Dirección</B>&nbsp;</td> <td>&nbsp;<B>Tipo de Empresa</B>&nbsp;</td> </tr>
        <?php
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        printf("<tr><td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td> <td>&nbsp;%s</td>",
        $row["nombre"], $row["telefono"], $row["correo"], $row["direccion"], $row["tempresa"]);
        }
        ?>
    </table>



<hr>

</body>
</html>