<!doctype html>
<html lang="en">
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

      .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 10rem;
  color: crimson;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="242styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
    <?php $page = 'resources'; include 'navbar.php'; ?>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <img src="./pics/belltower.jpg" class="d-block w-100" style="height: 35rem" alt="thumbnail">
  <br>
  <h4 class='col-md-12' style='text-align: center;'>Welcome to the resources page!</h4>
  <h5 class='col-md-12' style='text-align: center;'>Everything you see here is what we use to be succesful!</h5>
  <div class="centered">Resources!</div>
  <br>

  <div class="row" style="align-content: center; margin-left: 20rem;">
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
            <div class="card-header">
                    Sololearn - C++
                  </div>
        <img class="card-img-top" src="./pics/lab1.JPG" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Sololearn is a program that robotics team members use to teach themselves how to code the C++ language. That language is then used to code our robots.</p>
          <p>Find the site here: https://www.sololearn.com/Course/CPlusPlus/S</p>
            <small class="text-muted">Resources</small>
          </div>
        </div>
      </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                    <div class="card-header">
                            VEX Robotics - Tower Takeover
                          </div>
                <img class="card-img-top" src="./pics/lab2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This paragraph tag will contain additional information about the specific competition of Tower Takeover that goes on in VEX Robotics.</p>
                  <p>Find the site here: https://www.vexrobotics.com/vexedr/competition/vrc-current-game</p>
                    <small class="text-muted">Resources</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="align-content: center; margin-left: 20rem;">
                    <div class="col-md-4">
                      <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                    VEX Robotics Forum
                                  </div>
                        <img class="card-img-top" src="./pics/robotics_accepting_award.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">This is where we get all our information regarding VEX Robotics' rules and regulations for the competitions. Also, this forum is used to help with any techinical problems and coding updates.</p>
                          <p>Find the site here: https://www.vexforum.com/</p>
                            <small class="text-muted">Resources</small>
                          </div>
                        </div>
                      </div>

                            <div class="col-md-4">
                              <div class="card mb-4 box-shadow">
                                    <div class="card-header">
                                            VEX Robotics Coding Studio
                                          </div>
                                <img class="card-img-top" src="./pics/robotics_accepting_award2.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">This paragraph tag will contain information about the link below. It is blocked by the Holy Ghost Prep firewall currently.</p>
                                  <p>Find the site here: https://help.vexcodingstudio.com/</p>
                                    <small class="text-muted">Resources</small>
                                  </div>
                                </div>
                              </div>
                            </div>

  <div class="container noCarouselpadding">

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>
</body>
</html>
