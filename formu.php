<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['tel'];
    $correo = $_POST['email'];
    $direccion = $_POST['dir'];
    $tempresa = $_POST['tipo'];

    if(!empty($nombre) || !empty($telefono) || !empty($correo) || !empty($correo) || !empty($direccion) || !empty($tempresa)){
        $host = "localhost";
        $dbusername = "id17748796_root";
        $dbpassword = "Edman-mendoza5485";
        $dbname = "id17748796_proyecto";

        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT telefono from empresa where telefono = ? limit 1";
            $INSERT = "INSERT INTO empresa (nombre,telefono,correo,direccion,tempresa)values(?,?,?,?,?)";

            $stmt = $conn->prepare($SELECT);
            $stmt ->bind_param("i", $telefono);
            $stmt ->execute();
            $stmt ->bind_result($telefono);
            $stmt ->store_result();
            $rnum =$stmt->num_rows;
            if($rnum == 0){
                $stmt ->close();
                $stmt = $conn->prepare($INSERT);
                $stmt ->bind_param("sisss", $nombre,$telefono,$correo,$direccion,$tempresa);
                $stmt ->execute();
                echo "Datos registrados!";
            }
            else{
                echo "Telefono ya registrado.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else{
        echo "Cada uno de los datos son obligatorios!!!";
        die();
    }
?>