<?php include 'connectdb.php'; ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>
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
    <?php $page = 'calendar'; include 'navbar.php'; ?>
</header>

<main role="main">



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container noCarouselpadding">

        <center>
                <iframe src="https://calendar.google.com/calendar/embed?src=holyghostprep.org_lgg7i5ob1ar3iq3t4bffggm6fo%40group.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </center>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'; ?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>
      </body>
</html>
