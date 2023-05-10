<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(151, 149, 149);">
    <div style="background-color:rgba(82, 12, 82, 0.767);margin-left:50px; margin-right:50px;border-radius:20px;padding:100px; text-align:center; margin-top:50px;justify-content:center">
        <?php
            include 'conexion.php';
        ?>
        <h1 style="padding-bottom:20px">Agregar Usuario</h1>
        <form  action="" method="post">  
            <?php
            include 'validacion.php';
            ?>         
            <label style="font-size:20px" for="">Nombre</label>
            <input type="text" name="name">
            <br/>
            <label style="font-size:20px" for="">Apellido</label>
            <input type="text" name="lastname">
            <br/>
            <label style="font-size:20px"  for="">Telefono</label>
            <input type ="text" name="phone">
            <br/>
            <input style="font-size:15px" type="submit" value="Agregar">             
        </form>
        <br/>
        <button type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="inicio.php">Volver</a>
        </button>
    </div>
</body>
</html>