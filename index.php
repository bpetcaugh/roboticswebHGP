<?php 
include("connectdb.php"); 
require("functions.php");
checkSession();
?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>
    <style>

      body {
  /* Location of the image */
  background-image: url(pics/maxreschangeup.jpg);
  
  /* Background image is centered vertically and horizontally at all times */
  background-position: center center;
  
  /* Background image doesn't tile */
  background-repeat: no-repeat;
  
  /* Background image is fixed in the viewport so that it doesn't move when 
     the content's height is greater than the image's height */
  background-attachment: fixed;
  
  /* This is what makes the background image rescale based
     on the container's size */
  background-size: cover;
  
  /* Set a background color that will be displayed
     while the background image is loading */
  background-color: #464646;
}

    </style>
  </head>

  <body>
    <header>
      <?php $page = 'index'; include 'navbar.php'; ?>
    </header>

    <main role="main">

    </main>

    <!-- FOOTER -->
    <!--<footer class="container">
      <?php //include 'footer.php'; ?>
    </footer>-->

    <?php include 'bootstrapScripts.php'; ?>      
  </body>
</html>
