<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(151, 149, 149);">
    <div style="background-color:rgba(31, 253, 253, 0.521);margin-left:50px; margin-right:50px ;padding:20px; text-align:center; margin-top:10px;border-radius:10px">
        <h1>Buscar Usuario</h1>
            <table border=1 align="center">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
                <?php
            include 'conexion.php';
            $sql = "SELECT * FROM usuarios";
            $resultado = $conexion->query($sql);
            if($resultado-> num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    ?> 
                        <tr>
                            <td><?php echo($row['nombre']);?></td>
                            <td><?php echo($row['apellido']);?></td>
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
        <form style="padding-top:20px" action="buscar.php" method="POST">
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            <br/>
            <input type="submit" value="Buscar">             
        </form>

        <?php
        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
            $resultado = $conexion->query($sql);
            if($resultado-> num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    
                    echo($row['nombre']." ");
                    echo($row['apellido']."<br/>");
                    echo($row['fono']."<br/>");
                };
            }else{
                echo("No existe ese usuario <br/>");
            }   
        } 
        ?>
        <button type="button" class="btn">
            <a style="text-decoration: none;color: rgb(12, 11, 11);" href="inicio.php">Volver</a>
        </button>
    </div>
</body>
</html>