<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style/events.css">
        <link rel="stylesheet" href="style/events.scss">
    <title>Great Plains Game Players Events</title>
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

function pageSetup() {

let coll = document.getElementsByClassName("showDay");
let i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

};
</script>
</head>
<body onload="pageSetup()">
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



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Spring Event - FallzCon (BradCon)!</h2>
                <h5>
                    When:<br>
                    Thursday May 16 - Sunday May 19, 2024<br><br>
                    Where:<br> 
                    <a href="https://www.hyatt.com/en-US/hotel/south-dakota/hyatt-place-sioux-falls-south/fsdzs?src=corp_lclb_gmb_seo_fsdzs" target="_blank">HYATT Place Sioux Falls - South</a><br>
                    4935 Lake Shore Blvd Sioux Falls, SD 57106<br><br>
                    (605)271-2871<br><br>
                    For Reservations: Call Julie Coleman (605)-444-6833<br>
                    Ask for the GPGP rate.
                </h5>
                <img src="images/shield.png" alt="gold shield">
                <h3>Gaming Schedule!</h3>
                <section>
                  <button class="showDay">Thursday May 16th</button>
                  <div class="content">
                    <h4>Game 1:</h4>
                    <ul>
                      <li>6:00PM - 7:00PM Early Arrivers & Dinner</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                  </div>
                  <button class="showDay">Friday May 17th</button>
                  <div class="content">
                    <h4>Game 1:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Afternoon Session</li>
                      <li>6:00PM - 7:00PM Dinner (On your own)</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                    <h4>Game 2:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Afternoon Session</li>
                      <li>6:00PM - 7:00PM Dinner (On your own)</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                    <h4>Game 3:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Afternoon Session</li>
                      <li>6:00PM - 7:00PM Dinner (On your own)</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                  </div>
                  <button class="showDay">Saturday May 18th</button>
                  <div class="content">
                    <h4>Game 1:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Afternoon Session</li>
                      <li>6:00PM - 7:00PM Dinner (On your own)</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                    <h4>Game 2:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Afternoon Session</li>
                      <li>6:00PM - 7:00PM Dinner (On your own)</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                    <h4>Game 3:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Afternoon Session</li>
                      <li>6:00PM - 7:00PM Dinner (On your own)</li>
                      <li>7:00PM Onwards Firepit and general shenanigans</li>
                    </ul>
                  </div>
                  <button class="showDay">Sunday May 19th</button>
                  <div class="content">
                    <h4>Game 1:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Hugs, Cheers, Tears and Departures</li>
                    </ul>
                    <h4>Game 2:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Hugs, Cheers, Tears and Departures</li>
                    </ul>
                    <h4>Game 3:</h4>
                    <ul>
                      <li>9:00AM - 1:00PM Morning Session</li>
                      <li>1:00PM - 2:00PM Lunch (On your own)</li>
                      <li>2:00PM - 6:00PM Hugs, Cheers, Tears and Departures</li>
                    </ul>
                  </div>
                </section>
                <h4>Game Notes:</h4>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h2>Upcoming Event! GPGP Reunion</h2>
              <h5>
                When:<br>
                Wednesday July 3 - Sunday July 7, 2024<br><br>
                Where:<br> 
                South Sioux City Marriott Riverfront<br>
                Sioux City, IA<br><br>
                For Reservations: <a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1700592440098&key=GRP&app=resvlink" target="_blank">
                  GPGP Reunion
                </a>
            </h5>
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