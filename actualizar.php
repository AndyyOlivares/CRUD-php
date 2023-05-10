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
        include 'conexion.php';
    ?>
    <div style="background-color:rgba(126, 30, 30, 0.74);margin-left:50px; margin-right:50px;border-radius:20px;padding:100px; text-align:center; margin-top:50px;justify-content:center">
        <form action="recibir.php" method="POST">
            <h1>Actualizar Usuario</h1>
            <label for="">Nombre</label>
            <input type="text" name="name_actu">
            <br/>
            <input type="submit" value="Buscar">             
        </form>
        <button type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="inicio.php">Volver</a>
        </button>
    </div>
</body>
</html>