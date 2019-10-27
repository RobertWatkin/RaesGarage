<!-- Created By Robert Watkin
__________      ___.                  __     __      __         __   __   .__
\______   \ ____\_ |__   ____________/  |_  /  \    /  \_____ _/  |_|  | _|__| ____
 |       _//  _ \| __ \_/ __ \_  __ \   __\ \   \/\/   /\__  \\   __\  |/ /  |/    \
 |    |   (  <_> ) \_\ \  ___/|  | \/|  |    \        /  / __ \|  | |    <|  |   |  \
 |____|_  /\____/|___  /\___  >__|   |__|     \__/\  /  (____  /__| |__|_ \__|___|  /
-->
<?php

  $result="";
  print "bud";
  if (isset($_POST['submit'])){
    print "button pressed";
    require 'php/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail-$SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='RaesGarageEnquireForm@gmail.com';
    $mail->Password='password123#';

    $mail->setFrom($_POST['mail'],$_POST['name']);
    $mail->addAddress('robert_watkin@yahoo.co.uk');
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="stylesheets/headerFooterStylesheet.css">
  <link rel="stylesheet" href="stylesheets/enquireStylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".hamburger-btn .fa-times").hide();

    $(".hamburger-btn .fa-bars").click(function(){
      $(this).hide();
      $(".hamburger-btn .fa-times").show();
      $(".mob ul").addClass("active");
    });

    $(".hamburger-btn .fa-times").click(function(){
      $(this).hide();
      $(".hamburger-btn .fa-bars").show();
      $(".mob ul").removeClass("active");
    });
    });
  </script>
</head>
<body>

<div class="container">
  <nav class="desk">
    <ul>
      <li><a href="index.html">home</a></li>
      <li><a href="about.html">about us</a></li>
      <li><a href="maps.html">maps</a></li>
      <li class="active"><a href="enquire.html">Enquire Now</a></li>
      <li><a href="contact.html">contact us</a></li>
    </ul>
  </nav>

  <nav class="mob">
    <div class="hamburger-btn">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <ul>
        <a href="#"><li class="active">home</li></a>
        <li><a href="#">about us</a></li>
        <li><a href="#">maps</a></li>
        <li><a href="#">get a quote</a></li>
        <li><a href="#">contact us</a></li>
    </ul>
  </nav>

  <div class="parallax">
    <div class"titleBoxPositioner">
      <div class="titleBox">
        <img src="images/mot-logo.png" alt="mot logo image">
        <div>
          <h1>RAES<br />GARAGE</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="formBox">
      <form action="" method="post">

        <label for="name">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="email">Your Email</label>
        <input type="text" id="lname" name="mail" placeholder="Your email address (so we can get back to you)...">

        <label for="subject">Subject</label>
        <input type="text" name="Subject" placeholder="Subject...">

        <label for="message">Message</label>
        <textarea id="message" name="comment" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="submit" value="Send">
      </form>
      <h1><?= $result; ?></h1>
    </div>
  </div>

  <footer>
    <div class="quickLinks">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="about.html">about us</a></li>
        <li><a href="maps.html">maps</a></li>
        <li><a href="enquire.html">Enquire Now</a></li>
        <li><a href="contact.html">contact us</a></li>
      </ul>
    </div>

    <div class="footerLogo">
      <img src="images/mot-logo.png" alt="mot logo image">
      <div>
        <h2>RAES<br />GARAGE</h2>
      </div>
    </div>
  </footer>
</body>
</html>