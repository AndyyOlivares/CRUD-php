<?php
    function multiplicar(){
        if(isset($_POST['num1']) && isset($_POST['num2'])){
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            if(is_numeric($numero1) && is_numeric($numero2)){
                $resultado = $numero1 * $numero2;
                echo($resultado."<br/>");
            }
            else{
                echo("Debes ingresar solo numeros <br/>");
            }
        }
    }
?>