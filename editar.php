<?php

    $vnombre=$vtel=$vemail=$vdir=$vtipo="";

    if(isset($_POST["id"])&&!empty($_POST["id"])){
        $id= $_POST["id"];
        try{

            $vnombre=htmlspecialchars(strip_tags(trim($_POST['nombre'])));
            $v=htmlspecialchars(strip_tags(trim($_POST['apellido'])));
            $vedad=htmlspecialchars(strip_tags(trim($_POST['edad'])));

            
                include('libreria_db.php');
                $query='UPDATE alumno SET nombre=:nom, apellido=:ape, edad=:edad WHERE id_alumno=:id';

                $stmt = $pdo->prepare($query);


                $stmt->bindParam(':id',$id);
                $stmt->bindParam(':nom',$vnombre);
                $stmt->bindParam(':ape',$vapellido);
                $stmt->bindParam(':edad',$vedad);

                if($stmt->execute()){
                    header('Location:lista_alumnos.php');  
                }else{
                    echo "Error al actulizar";

                }
        }
        catch(PDOException $exeption){
            die('ERROR:'.$exeption->getMessage());
        }
       

    }else{

        $id=isset($_GET['id']) ? $_GET['id']: die('ERROR: alumno no especificado.');
        try {

            include('libreria_db.php');

            $query = 'SELECT * FROM alumno WHERE id_alumno=:id';
            $stmt= $pdo->prepare($query);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            

            $vnombre = $row['nombre'];
            $vapellido = $row['apellido'];
            $vedad = $row['edad'];




        }

        catch(PDOException $exeption){
            die('ERROR:'.$exeption->getMessage());
        }


    }   

?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo edicion</title>
</head>
<body>
    <h1>Edicion persona</h1>
    <form action="editar.php" method="POST">
        <table>
            <tr>
                <td>Nombre</td>
                <td>
                    <input type="text" name="nombre" size="20" maxlenght="30" value="<?php echo $vnombre;?> " required>
                </td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td>
                    <input type="text" name="apellido" size="20" maxlenght="30" value="<?php echo $vapellido;?> " required>
                </td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>
                    <input type="text" name="edad" size="20" maxlenght="30" value="<?php echo $vedad;?> " required>
                </td>
            </tr>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </table>
        <input type="submit" name="action" value="Grabar">
        <input type="button" onclick="window.location.href='lista_alumnos.php';" value="Cancelar">
    </form>
</body>
</html>