<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(151, 149, 149);">
    <div style= "background-color:rgb(255, 209, 153);padding:100px; text-align:center;margin-left:50px; margin-right:50px;border-radius:10px">
        <form id='1' action="" method="post">
            <h1>Validacion de Campos</h1>
            <?php
            include 'validacion.php';
            ?>
            <label for="">Usuario</label>
            <input style="margin-bottom:10px" type="text" value="<?php echo("$nombre")?>" name="usuario">
            <br/>
            <label for="">Contra</label>
            <input style="margin-bottom:5px"  type="password" name="contra">
            <br>
            <input type="submit" value="Validar">
        </form>
        <button type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="inicio.php">Volver</a>
        </button>
    </div>

    <div style="background-color:rgb(218, 255, 176);padding:100px; text-align:center; margin-top:10px ;margin-left:50px; margin-right:50px;border-radius:10px">
        <h1>Multiplicacion</h1>
        <form action="" method="post">
        <input type="text" name="num1">
        <br/>
        <input type="text" name="num2">
        <br/>
        <input type="submit" value="Enviar">
        </form>
        <?php
            include "funciones.php";
            multiplicar();

        /* d = dia del mes
           m = mes
           y = anio
           l = dia de la semana
        */
        ?>
        <button type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="inicio.php">Volver</a>
        </button>
    </div>

</body>
</html>