<?php

//Recibiendo variables
$to = "contacto@aguasconcepcion.cl";
$subject = 'Contacto Formulario Aguasconcepcion.cl';
$name = $_POST['name'];
$message = $_POST['message'];
$from = $_POST['email'];

//Creando mensaje
$contenido = "Nombre: ". $name . "\n \n Email: " . $from . " \n \n Mensaje: " . $message;

//Enviando Email
if(mail($to, $subject, $contenido)){
   header( 'Location: ./index.html' ) ;
} else{
    echo 'Ha ocurrido un error, intentelo nuevamente';
}

?>
