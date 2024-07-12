<?php

if (!empty($_POST['logenviar'])){

    if (!empty($_POST['logemail']) && !empty($_POST['logpass'])){

        $logemail = $_POST['logemail'];
        $logpass = $_POST['logpass'];
        $logenviar = $_POST['logenviar'];

        $sql = "SELECT * FROM usuarios WHERE email = '$logemail' and contraseña = '$logpass'";

        $res = mysqli_query($conection, $sql);

        if (mysqli_num_rows($res) > 0){

            echo "Sesión iniciada";
            header("Location: http://localhost/Formulario-dinamico-HTML-CSS-JS/index2.php");
            exit();

        }
        else{
            echo "Email o contraseña incorrectos";
        }

    }
    else{
        echo "Todos los campos son obligatorios";
    }

}