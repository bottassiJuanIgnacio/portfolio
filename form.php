<?php
    $destinatario = 'bottassi2012@gmail.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    
    // $mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
    // $mensaje = "Su e-mail es:  " . $email . "\r\n";
    // $mensaje = "asunto: " . $asunto . "\r\n";
    // $mensaje = "Mensaje:" . $_POST['mensaje'] . "\r\n";
    // $mensaje = "Enviado el " . date('d/m/y', time());
    

    $header = 'Este mail fue enviado desde el portfolio web';
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($email, $asunto, $mensajeCompleto, $header);

    echo "<script> alert("correo enviado exitosamente")</script>";
    echo "<script> setTimeout(\"location.href='exito.html'\",5000)</script>";

?>