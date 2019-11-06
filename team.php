<?php session_start(); 

include("connectdb.php");?> 
<!doctype html>
<html lang="en">
  <head>
  <?php include("head.php");
   ?> 
  </head>
  <body>
    <header>
    <?php include("navbar.php"); 
    ?>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


  <?php 
    //Test Connection to DB
    include("connectdb.php"); 
  ?>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include("footer.php"); 
    ?>
</main>

<?php include("bootstrapScripts.php"); 
    ?>


    </body>
</html>
