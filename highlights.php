<?php session_start(); 

 include 'connectdb.php'; 


$sql = "SELECT * FROM Events";
$result = mysqli_query($conn, $sql);


?>

<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>   
  </head>
  <body>
    <header>
    <?php include 'navbar.php'; ?>   
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
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="index.html"><img class="toplogo" src="./pics/fb_logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
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
          <a class="nav-link disabled" href="#">Highlights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="join.html">Join</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resources.html">Resources</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="teams.html">Teams</a>
        </li>
      </ul>
      
    </div>
  </nav>
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
           <div class='card' style='width: 40rem; height: 30rem;'>
           <div id='carouselExampleSlidesOnly' class='carousel slide' data-ride='carousel'>
              <div class='carousel-inner'>
              <img class=\"card-img-top\" src=\"./pics/" . $row['Team Picture'] . "\" alt=\"Card image cap\">    
                              
                       </div>       
            <div class='card-header'>
                " . $row['Name'] . " 
            </div>
            <div class='card-body'>
            <p class='card-text'>" . $row['Description'] . "</p>
            <a class='btn btn-primary' href='#' role='button'>Learn more</a>
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
  <?php include 'footer.php'; ?>   
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>   
    </body>
</html>
