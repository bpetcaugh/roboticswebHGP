
<?php 
include("connectdb.php"); 
require("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>

  <!-- Additional Styles For This Page -->
  <link href="http://cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

    <style>

      #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
       
    </style>

 </head>
  <body>
    <header>
    <?php $page = 'subscribe'; include 'navbar.php'; ?>
</header>

<main role="main">




  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container noCarouselpadding">

      <div style="width:60%; margin: 0 auto;">
        <img  src="pics/seal.png" style="width:20%; display: block; margin: 0 auto;">

        <!-- Begin Mailchimp Signup Form -->
        <div id="mc_embed_signup">
        <form action="https://holyghostprep.us20.list-manage.com/subscribe/post?u=31003a86b946a03e4c5bb27c5&amp;id=5f2cca945e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
            <h2>Subscribe to Robotics Mailing List</h2>
        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
        <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
        </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
        </div>
        <div class="mc-field-group">
            <label for="mce-FNAME">First Name </label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
        </div>
        <div class="mc-field-group">
            <label for="mce-LNAME">Last Name </label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
        </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_31003a86b946a03e4c5bb27c5_5f2cca945e" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
    </div>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'; ?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>      
</body>
</html>

