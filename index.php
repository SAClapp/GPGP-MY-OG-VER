<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/style.scss">
    <title>Great Plains Game Players Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>

function mobileNav() {
  let x = document.getElementById("mobileLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>
</head>
<body>
    <header>
        <nav>
          <div id="desktopNav">
            <div id="brand"><a href="index.php"><h2>GPGP</h2></a></div>
            <div id="link"><a href="#">About</a></div>
            <div id="link"><a href="events.php">Events</a></div>
            <div id="link"><a href="#">Links</a></div>
            <div id="logIn"><a href="#"></a><p>Login</p></a></div>
          </div>
    
    
          <div class="mobileNav">
            <a href="index.php" id="mbrand">GPGP</a>
          
            <div id="mobileLinks">
              <a href="#">About</a>
              <a href="events.php">Events</a>
              <a href="#">Login</a>
            </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="mobileNav()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </nav>
    
    </header>
<div id="banner">
    <div>
    <h1>Great Plains </h1>
</div>
<div>
    <img src="images/GPGP_Logo.png" alt="GPGP Logo" >
</div>
<div>
    <h1> Game Players</h1>
</div>
</div><!--close banner-->

<div id="highlightEvent">
    <div class="image-container">
  <img src="images/miniatures2.jpg" alt="miniatures">
  <div class="overlay">
    <h2>Spring Event - FallzCon (BradCon)!</h2>
    <p>
        Thursday, May 16, 2024 -<br>
        Sunday, May 19, 2024
    </p>
    <div id="viewEvent"><a href="events.php"><p>View Event</p></a></div>
  </div>
</div>
    <div id="mobileEvent">
        <img src="images/miniSm.jpg" alt="miniatures">
        <div id="text">
        <h2>Spring Event - FallzCon (BradCon)!</h2>
        <p>
            Thursday, May 16, 2024 -<br>
            Sunday, May 19, 2024
        </p>
        </div>
        <div id="viewEvent"><a href="events.php"><p>View Event</p></a></div>
    </div>
</div>




    <div class="container">
        <div class="row">
            <section>
            <h2>News & Other Events</h2>
            <hr>
            </section>

            <div class="col-md-4">
                <h4>Jeremy's D&D One Shot</h4>
                <p>6 PM - 9 PM</p>
                <p>Wednesday, October 5, 2023</p>
                <a href="#">Read More</a>
            </div>

            <div class="col-md-4">
                <h4>BattleTech Night</h4>
                <p>4 PM - 10 PM</p>
                <p>Saturday, October 31, 2023</p>
                <a href="#">Read More</a>
            </div>

            <div class="col-md-4">
                <h4>We Got T-Shirts!</h4>
                <p>T-Shirt orders are in, and they will be available at our next meeting.</p>
                <a href="#">Read More</a>
            </div>
            <h5><a href="#">View More</a></h5>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>A Social Group With a Gaming Problem!</h2>
                <img src="images/shield.png" alt="gold shield">
                <p>
                    Going strong for over 45 years, our group of game players have been convening at various locations
                    throughout the Midwest region to challenge each other on the game table. We primarily focus on turn-based
                    strategy games, such as Terror on the Tonkin, Civil War Battle, BattleTech, and GW Middle Earth.
                </p> 
            </div>
        </div>
    </div>

<footer>

    <div id="links">
    <a href="#">Code of Conduct</a><br>
    <a href="#">Privacy Policy</a>
    </div>
    <div id="copyright">
    <a href="#"><?php echo date("Y");?> All Rights Reserved</a>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>