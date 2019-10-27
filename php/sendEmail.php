<?php

$result="";
  if (isset($_POST['Submit'])){
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail-$SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username'RaesGarageEnquireForm@gmail.com';
    $mail->Password='password123#'

    $mail->setFrom($_POST['mail'],$_POST['name']);
    $mail->addAddress('robert_watkin@yahoo.co.uk')
    $mail->addReplyTo($_POST['mail'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['Subject'];
    $mail->Body='<h1 align=center>Name : '.$_POST['name'].'<br>Email : '.$_POST['mail']/'<br>Message: '.$_POST['message'].'</h1>';

    if (!$mail->send()){
      $result="Something went wrong. Please try again.";
    }
    else{
      $result="Thanks ".$_POST['name']." for contacting us. We'll get back to you soon!";
    }
  }

?>
