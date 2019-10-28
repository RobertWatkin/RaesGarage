<?php

  echo json_encode("hello");

  use PHPMailer\PHPMailer\PHPMailer;

  echo "test";

  if(isset($_POST['name']) && isset($_POST['email'])){
    echo "running";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //SMTP setting
    $mail->isSMTP();
    $mail->host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "raesgarageenquiryform@gmail.com";
    $mail->Password = "password123#";
    $mail->port =  465; // (current is ssl) tls - 587
    $mail->SMTPSecure = "ssl";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("robert_watkin@yahoo.co.uk");
    $mail->Subject = $subject;
    $mail->Body = $body;
    if ($mail->send()){
      echo "Email is sent!";
    }
    else {
      echo "something is wrong: :" . $mail->ErrorInfo;
    }
    exit(json_encode(array("response" => $response)));
  }
?>
