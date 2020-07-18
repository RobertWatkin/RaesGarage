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
</head>
<body>

  <!--Navbar-->
  <?php include("php/navbar.php"); ?>

  <!--Main-->
   <!-- Header - set the background image for the header in the line below -->
   <header class="py-5 bg-image-full" style="background-image: url('images/car_dash.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img class="img-fluid d-block mx-auto" style="height: 150px;" src="images/mot-logo.png" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>About Us</h1>
      <p class="lead">A little more personal...</p>
      <p>Rae’s Mot & Service Centre is a family run car repair garage offering a full range of services on all makes and models of vehicles... <a href="about.php">read more...</a></p>
    </div>
  </section>

  <!-- Image element - set the background image for the header in the line below -->
  <div class="py-5 bg-image-full" style="background-image: url('images/red_car.jpg');  background-repeat: no-repeat; background-size: cover; background-position: center;"">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Our Services</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <!--Footer-->
  <?php include("php/footer.php"); ?>
</body>
</html>
