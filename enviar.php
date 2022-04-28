<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $para = 'websummitcw@gmail.com';
    $titulo = 'Mensaje enviado desde la web';
    $correo = "Nombre: $name\n E-Mail: $email\n Mensaje:\n $message";

    if(isset($name) && isset($email) && isset($message)){
        if(mail($para, $titulo, $correo)){
            echo "mensaje enviado con exito";
        }else{
            echo "error";
        }
    }else{
        echo "Todos los campos deben ser completados";
    }
?>