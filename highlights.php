<?php session_start(); 

//Step 4
$servername = "localhost";
$username = "robotics";
$password = "242forlife";
$dbname = "robotics";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Step 5
$sql = "SELECT * FROM Events";
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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

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
    <?php include("./includes/navbar.php"); ?>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

<br><br><br><br><br>
  <div class="container noCarouselpadding">

      <?php
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           echo "
           <div class='card' style='width: 20rem; height: 30rem;'>
           <div id='carouselExampleSlidesOnly' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-inner'>
                              <div class='carousel-item active'>
                                <img class=\"d-block w-100\" src=\"./pics/" . $row['Picture'] . "\" alt=\"First slide\">
                                
                              </div>
                              <div class='carousel-item'>
                                <img class='d-block w-100' src='pics/lab2.jpg' alt='Second slide'>
                              </div>
                              <div class='carousel-item'>
                                <img class='d-block w-100' src='pics/belltower.jpg' alt='Third slide'>
                              </div>
                            </div>
            <div class='card-header'>
                " . $row['Name'] . " 
            </div>
            <div class='card-body'>
            <p class='card-text'>" . $row['Description'] . "</p>
            <a href='#' class='btn btn-primary'>Learn More</a>
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


  </div><!-- /.container -->

  

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2019 Holy Ghost Preparatory School &middot; </p>
  </footer>
</main>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
