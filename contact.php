<!--  Created By Robert Watkin - RobertWatkin, GitHub
__________      ___.                  __     __      __         __   __   .__
\______   \ ____\_ |__   ____________/  |_  /  \    /  \_____ _/  |_|  | _|__| ____
 |       _//  _ \| __ \_/ __ \_  __ \   __\ \   \/\/   /\__  \\   __\  |/ /  |/    \
 |    |   (  <_> ) \_\ \  ___/|  | \/|  |    \        /  / __ \|  | |    <|  |   |  \
 |____|_  /\____/|___  /\___  >__|   |__|     \__/\  /  (____  /__| |__|_ \__|___|  /
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("php/head.php"); ?>
  <link type="text/css" rel="stylesheet" href="stylesheets/contactStyle.css">
</head>
<body>

  <!--Navbar-->
  <?php include("php/navbar.php"); ?>

  <!--Main-->
    <div class="container contact-form">
      <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
      </div>
        <form method="post">
          <h3>Drop Us a Message</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                </div>
              <div class="form-group">
            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!--Footer-->
  <?php include("php/footer.php"); ?>
</body>
</html>



