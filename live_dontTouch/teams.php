<?php session_start(); 

//Step 4
$servername = "localhost";
$username = "robotics";
$password = "242forlife";
$dbname = "robotics";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Step 5
$sql = "SELECT * FROM Teams";
$result = mysqli_query($conn, $sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="242 Firebirds website">
    <meta name="author" content="Brandon Petcaugh, 242 team">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>242 Firebirds</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="242styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <!--
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="index.html"><img class="toplogo" src="./pics/fb_logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calendar.html">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Fundraising</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="highlights.html">Highlights</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fundraising.html">Fundraising</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
    </li>
      </ul>
      
    </div>
  </nav>
    -->

    <?php include("./includes/navbar.php"); ?>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container noCarouselpadding">

        <div class="alert alert-danger" data-dismiss="alert" role="alert">
                Connected successfully!
        </div>

        <!--
          Team ToDo List:
          ------------Early Days---------------------------
          -Team Goggles
          -Team Captain completes Referee Training
          -Engineering Journal: Introduce Team Members
          -Engineering Journal: Explain the challenge, with strategies
          -Engineering Journal: Sketch first design
          -Engineering Journal: First pages of day-to-day work
          -Build a base
          -Code base to drive
          -Put code base in the CLOUD
          ------------ October  ---------------
          -Pick up a cube
          -Stack 2-3 cubes
          
          ------------ Night Before Competition  ---------------




          pictures
          team bio
          team name / number
          team members
          robot name
        -->


        <?php
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           echo "
            <div class='card'>
            <div class='card-header col-md-12'>
                " . $row['Team Name'] . " - " . $row['Team Number'] . "
            </div>
            <div class='card mb-12 box-shadow'>
            <img class=\"card-img-top\" src=\"./pics/" . $row['Team Picture'] . "\" alt=\"Card image cap\">
            <div class='card-body'>
                <p>This is the team titled " . $row['Team Name'] . " and numbered " . $row['Team Number'] . " . The name of their robot is " . $row['Robot Name'] . ". The members in their team are " . $row['Team Members'] . ". TEAM AWARDS include: " . $row['Awards'] . ". A little bit about their team: " . $row['Team Bio'] . ".</p>
            </div>
            </div>
            </div>
            <br><br>

            
            ";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
?>   


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2019 Holy Ghost Preparatory School &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
