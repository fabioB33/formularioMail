<?php
require("vendor/autoload.php");


use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html= false){

    //confgiracion Inicial Servidor usando mailtrap.io
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '';
    $phpmailer->Password = '';

    //Añadiendo destinatarios
    $phpmailer->setFrom('from@example.com', 'Mailer');
    $phpmailer->addAddress($email, $name);     //Add a recipient


    //definiendo el contenido de mi email
     $phpmailer->isHTML($html);                                  //Set email format to HTML
     $phpmailer->Subject = $subject;
     $phpmailer->Body    = $body;
     
    //mandar el correo
     $phpmailer->send();


}

?>