<!doctype html>
<html lang="en">
  <head>
	<?php
  		include("./includes/header.php");
  		include("./includes/config.php");
  	?>
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
  </head>
  <body>
    <header>
  <?php include("./includes/nav.php"); ?>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


  <?php
    //Test Connection to DB
    include("./includes/connectdb.php");
  ?>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <?php include("./includes/footer.php") ?>
    </body>
</html>
