
<?php include("connectdb.php"); ?>   




<!doctype html>
<html lang="en">
  <head>
  <?php include("head.php"); ?>   
  </head>
  <body>
    <header>
<<<<<<< HEAD
    <?php include("./includes/navbar.php"); ?>
=======
    <?php include("navbar.php"); ?>   
>>>>>>> master
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
  <?php include("footer.php"); ?>   
  </footer>
</main>

<?php include("bootstrapScripts.php"); ?>   
    </body>
</html>
