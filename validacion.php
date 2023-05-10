<?php
    $nombre="";

    if(isset($_POST['usuario'])){
        $nombre = $_POST['usuario'];
        $password = $_POST['contra'];
        if($nombre == ""){
            echo("<div> El campo usuario no puede esta vacio <div/>");
        }
        else if(strlen($password) < 6){
            echo("<div>Tu password debe ser mayor a 6 digitos<div/>");
        }
        else{
            $nombre = "";
            echo("<div> Datos enviados Correctamente <div/>");
        }

    }

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];

        if($name == '' or $lastname == '' or is_numeric($phone) == FALSE or strlen($phone < 9)){
            echo("<div> Complete los campos correctamente <div/>");
        }
        else{
            echo("<div> Usuario agregado Correctamente <div/>");
            if(isset($_POST['name'])){
                $nombre = ucfirst(strtolower($_POST['name']));
                $apellido = ucfirst(strtolower($_POST['lastname']));
                $telefono = $_POST['phone'];
        
                $sql = "INSERT INTO usuarios(nombre,fono,apellido)
                VALUES('$nombre','$telefono','$apellido')";
        
                if($conexion -> query($sql)===true){
                ?>
                <?php
            }}}}?>
