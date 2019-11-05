<?php include $_SERVER['DOCUMENT_ROOT']."/includes_robot/connectdb.php"; ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include("./includes/head.php"); ?>
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
    <!-- Custom styles for this template -->
    <link href="242styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
    <?php include("./includes/navbar.php"); ?>  
</header>

<!-- The Email Modal -->
<div class="modal fade" id="emailModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                    <div class="form-group">
                        <p style="text-align: center;"><i>THIS FORM DOES NOT FUNCTION YET</i></p>
                        <label for="uname1">Email</label>
                        <input type="text" class="form-control form-control-lg" name="uname1" id="uname1" required="">
                        <div class="invalid-feedback">Oops, you missed this one.</div>
                    </div>
                    <div class="form-group py-4">
                        <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-lg float-right" id="btnLogin">Add Me</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container noCarouselpadding">

    <container>
      <h1 style="text-align: left;">Email List</h1>
      <p style="text-align: left;">To add yourself to the email list, click the button below and follow the directions.</p>
      <button class="btn btn-danger ml-auto rightMe" data-toggle="modal" data-target="#emailModal">ADD ME</button>

      <br><br><br>

      <div class="container">
          <div class="row">
              <!-- Title -->
              <div class="" data-wow-delay=".2s">
                  <h1 class="section-title">Drop the Robotic Family a Line</h1>
              </div>
          </div>
          <div class="row">
              <!-- contact form -->
              <div class="" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group">
                        <label class="control-label" for="name" style="text-align: left;">Name</label>
                        <input class="form-control" id="name" type="text" name="name" style="text-align: left;" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group">
                        <label class="control-label" for="email" style="text-align: left;">Email</label>
                        <input class="form-control" id="email" type="email" name="email" style="text-align: left;" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group">
                        <label class="control-label" style="text-align: left;">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" style="text-align: left;" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group">
                          <label for="message" class="control-label" style="text-align: left; width: 30rem;">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" style="text-align: left;" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit">
                          <button class="btn btn-danger ml-auto rightMe" type="submit">SEND</button>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
            
    </container>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include("./includes/footer.php"); ?>
  </footer>
</main>

<?php include("./includes/bootstrapScripts.php"); ?>      
</body>
</html>
