<?php
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $comment = $_POST['message'];
  $message = '';
  $to  = 'Brian.barreiro1994@gmail.com';
  $subject = 'Contacto desde la Página BrianBarreiro.com';

  $message ="Nombre: ".$name."\rEmail: ".$mail."\rMensaje: ". $comment ;
    
  // Para enviar un correo HTML, debe establecerse la cabecera Content-type
  $headers = "De: " . $_POST["name"] . "<". $_POST["mail"] .">\r\n";
  // Enviarlo
  mail($to, $subject, $message, $headers);
?>