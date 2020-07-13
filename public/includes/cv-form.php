<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'public/includes/PHPMailer/src/Exception.php';
require 'public/includes/PHPMailer/src/PHPMailer.php';
require 'public/includes/PHPMailer/src/SMTP.php';

require 'vendor/autoload.php';

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){

    function sendmail($to, $form, $formName, $msg, $attachment){
        $mail = new PhpMailer();
        $mail->sefrom($form, $formName);
        $mail->addAdress($to);
        $mail->addAttachment($attachment);
        $mail->Subject = 'Réception de CV depuis la page [emploi] de synergyindustry.net';
        $mail->msg = $msg;
        $mail->isHTML(true);

        return $mail->send();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $msg = nl2br($_POST['msg']);

    //attament file
    $file = "attachament/" . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)){
        if ( sendmail('lebz2016@gmail.com', $email, $name, $msg, $objet, $attachment)){
            echo "votre CV a été envoyée !";
        } else {
            echo "OOps une erreur s'est produite lors de l'envoi veillez réessaiyer!";
        }

    } else {
        echo " Erreur, Aucun CV Téléver !";

    }

}
