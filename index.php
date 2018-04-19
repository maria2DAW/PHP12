<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operador ternario</title>
    </head>
    <body>
        <?php
            //Sintaxis operador ternario:
            //Condición ? Valor si verdadero : Valor si falso
        
        
            if(isset($_POST["enviando"]))
            {
                $edad = $_POST["edad_usuario"];
                
                $nombre = $_POST["nombre"];
                
                $contra = $_POST["contra"];

                /*if($edad < 18)
                {
                    echo "Eres menor de edad. No tienes acceso.";
                }

                else
                {
                    echo "Eres mayor de edad. Puedes acceder.";
                }*/

                echo $edad < 18 ? "Eres menor de edad. No tienes acceso." : "Eres mayor de edad. Puedes acceder.";

                //También así:

                $resultado = $edad < 18 ? "Eres menor de edad. No tienes acceso." : "Eres mayor de edad. Puedes acceder.";

                echo $resultado;
                
                $resultado2 = $nombre == "María" && $contra = "1234" ? "Correcto" : "Incorrecto";
            }
        ?> 
    </body>
</html>
