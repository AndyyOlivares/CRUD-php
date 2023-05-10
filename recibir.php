    <?php
    include 'conexion.php';
    ?>
    <div style="background-color:rgb(28, 99, 28);margin-left:50px; margin-right:50px;border-radius:20px;padding:50px; text-align:center; margin-top:50px;justify-content:center">
        <h1><?php echo("Conexion exitosa")?></h1>
    </div>
    <?php if(isset($_POST['name'])){
        $nombre = ucfirst(strtolower($_POST['name']));
        $apellido = ucfirst(strtolower($_POST['lastname']));
        $telefono = $_POST['phone'];

        $sql = "INSERT INTO usuarios(nombre,fono,apellido)
        VALUES('$nombre','$telefono','$apellido')";

        if($conexion -> query($sql)===true){
        ?>
        <div style="background-color:gray; padding:20px; text-align:center; margin-top:10px">
            <h1>Agregar Usuario</h1>
            <p><?php echo("Usuario agregado exitosamente");?></p>
            <Button><a style="text-decoration: none" href="agregar.php"> Volver Atrás</a></Button>
        </div>        
        <?php
           
        }else{
            die("Error al insertar datos". $conexion -> error);
        }
        
    }else if(isset($_POST['changeName'])){

        $changeName = ucfirst(strtolower($_POST['changeName']));
        $id = $_POST['id'];
        
        $sql = "UPDATE usuarios SET nombre = '$changeName' WHERE id= '$id'";

        if($conexion -> query($sql)===true){
        ?>
        <div style="background-color:rgb(95, 174, 206);margin-left:50px; margin-right:50px;border-radius:20px;padding:50px; text-align:center; margin-top:50px;justify-content:center">
            <h1><?php echo("Usuario Actualizado exitosamente"); ?></h1>
            <Button><a style="text-decoration: none" href="inicio.php"> Volver Atrás</a></Button>
        </div>
        <?php         
        }else{
            die("Error al actualizar datos". $conexion -> error);
        }
    }


         

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(151, 149, 149);">
    <?php
        if(isset($_POST['name_actu'])){

            $nombre = $_POST['name_actu'];
            $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
            $resultado = $conexion->query($sql);
            if($resultado-> num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    ?>
                    <div style="background-color:rgb(95, 174, 206);margin-left:50px; margin-right:50px;border-radius:20px;padding:50px; text-align:center; margin-top:50px;justify-content:center">
                    <form action="recibir.php" method="POST">
                        <h1>Actualizar Usuario</h1>
                        <input type="hidden" name='id' value=<?php echo($row['id'])?>>
                        <br/>
                        <label for="">Nombre</label>
                        <input type="text" name="changeName">
                        <br/>
                        <input type="submit" value="Actualizar">             
                    </form>
                    <button type="button" class="btn">
                        <a style="text-decoration: none;color: rgb(12, 11, 11);" href="inicio.php">Volver</a>
                    </button>
                    </div>                 
                    <?php
                };
            }
            else{
                ?>
                <div style="background-color:rgb(95, 174, 206);margin-left:50px; margin-right:50px;border-radius:20px;padding:50px; text-align:center; margin-top:50px;justify-content:center">
                    <h1>Actualizacion de Usuario</h1>
                    <p><?php echo("Usuario no encontrado"); ?></p>
                    <Button><a style="text-decoration: none" href="actualizar.php"> Volver Atrás</a></Button>
                </div>
                <?php                
            }
            }
            
            $conexion->close();
        ?>
        

</body>
</html>