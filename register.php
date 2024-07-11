<?php

$short = false;
$fields = false;
$registered = false;

if (!empty($_POST['enviar'])){

    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['contraseña'])) {

        if (strlen($_POST['contraseña']) < 8){

            // echo "La contraseña es demasiado corta<br>Requisitos:<br>-8 caracteres<br>-Una mayúscula<br>-Un número<br>-Un caracter especial<br>";
            // echo "La contraseña es demasiado corta. Mínimo 8 caracteres";
            $short = true;

        }
        else{
            // echo "Usuario registrado";
            $registered = true;
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];  
                
            $sql = "INSERT INTO usuarios(nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";
            $res = mysqli_query($conection, $sql);
        }

    }
    else{
        // echo "Todos los campos son obligatorios";
        $fields = true;
    }
    
}
                