<!-- Created By Robert Watkin
__________      ___.                  __     __      __         __   __   .__
\______   \ ____\_ |__   ____________/  |_  /  \    /  \_____ _/  |_|  | _|__| ____
 |       _//  _ \| __ \_/ __ \_  __ \   __\ \   \/\/   /\__  \\   __\  |/ /  |/    \
 |    |   (  <_> ) \_\ \  ___/|  | \/|  |    \        /  / __ \|  | |    <|  |   |  \
 |____|_  /\____/|___  /\___  >__|   |__|     \__/\  /  (____  /__| |__|_ \__|___|  /
-->
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
      <form id="mailForm" action="" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <label for="email">Your Email</label>
        <input type="text" id="email" name="email" placeholder="Your email address (so we can get back to you)...">

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject...">

        <label for="message">Message</label>
        <textarea id="body" name="comment" placeholder="Write something.." style="height:200px"></textarea>

        <input type="button" onclick="sendEmail()" value="submit" value="Send">
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript">


    function sendEmail(){
      console.log('sending...');
        var name = $('#name');
        var email = $('#email');
        var subject = $('#subject');
        var body = $('#body');

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
            console.log('passedcondition');
            $.ajax({
              url: 'sendEmail.php',
              method: 'POST',
              // remvoed the datatype of json
              data: {
                name: name.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val()
              }, success: function (response) {
                console.log(response);
              },
              error: function(xhr, status, error){
                console.log("status: " + status);
                console.log("error: " + error);
              }
            });
        }

    }

    function isNotEmpty(caller){
      if (caller.val() == ""){
        caller.css('border','2px solid red');
        return false;
      }else{
        caller.css('border','')
      }
      return true;
    }
  </script>

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
