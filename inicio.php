<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color: rgb(151, 149, 149);">
    <div style="margin-top: 250px;" class="text-center">
        <button style="background-color: rgb(224, 235, 133); font-size: 25px;" type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="agregar.php">Agregar</a>
        </button>
        <button style="background-color: rgb(243, 200, 147); font-size: 25px;" type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="buscar.php">Buscar</a>
        </button>
    </div>
    <div style="margin-top: 20px;" class="text-center">
        <button style="background-color: rgb(212, 108, 108); font-size: 25px;" type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="actualizar.php">Actualizar</a>
        </button>
        <button style="background-color: rgb(235, 149, 118); font-size: 25px;" type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="validar.php">Validar</a>
        </button>
    </div>
    <div style="margin-top: 20px;" class="text-center">
    <table  border=2 align="center">
                <tr>
                    <th style="padding: 10px">Nombre</th>
                    <th style="padding: 10px">Apellido</th>
                    <th style="padding: 10px">Telefono</th>
                </tr>
            <?php

            include 'conexion.php';
            if(isset($_POST['id'])){
                $id = $_POST['id'];
        
                $sql = "DELETE FROM usuarios WHERE id= '$id'";
                if($conexion -> query($sql)===true){
                    ?>
                        <p style="text-align:center"><?php echo("Usuario Eliminado exitosamente"); ?></p>
                    <?php         
                    }else{
                        die("Error al eliminar datos". $conexion -> error);
                    }
            }
            $sql = "SELECT * FROM usuarios";
            $resultado = $conexion->query($sql);
            if($resultado-> num_rows > 0 or isset($_GET['id'])){
                while($row = $resultado->fetch_assoc()){
                    ?> 
                        <tr>
                            <td><?php echo($row['nombre']);?></td>
                            <td><?php echo($row['apellido']);?></td>
                            <td><?php echo($row['fono']);?></td>
                            <td>
                                <form action="/inicio.php" method="POST">                                    
                                    <button name="id" value="<?php echo($row['id'])?>">eliminar</button>
                                </form>
                            </td>
                        </tr>
       
                <?php
                };
                ?>
                </table>
                <?php
            }else{
                echo("No hay usuarios agregados"."<br/>");
            } 
            ?>
    </div>
    

</body>
</html>