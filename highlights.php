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

      .carousel-inner{
        width:100%;
        max-height: 200px;
        padding-bottom: 1px;
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

  <div class="container noCarouselpadding">

    <container>
            <div class="card" style="width: 20rem; height: 30rem;">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="pics/belltower.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="pics/lab2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="pics/belltower.jpg" alt="Third slide">
                              </div>
                            </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Highlight #1</h5>
                      <p class="card-text">This is a phony paragraph tag about a fake hightlight that I am currently making up. Lol.</p>
                      <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
    </container>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <?php include("./includes/footer.php"); ?>
    </body>
</html>
