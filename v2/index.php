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

      .rightMe {
        float: right;
        /*position: absolute;
        right: 20px;
        top: 10px;*/
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="242styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
    <?php $page = 'index'; include 'navbar.php'; ?>
</header>

 <!-- The Login Modal -->
 <div class="modal fade" id="loginModal">
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
                        <a href="" class="float-right">New user?</a>
                        <label for="uname1">Username</label>
                        <input type="text" class="form-control form-control-lg" name="uname1" id="uname1" required="">
                        <div class="invalid-feedback">Oops, you missed this one.</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control form-control-lg" id="pwd1" required="" autocomplete="new-password">
                        <div class="invalid-feedback">Enter your password too!</div>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="rememberMe">
                      <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
                    </div>
                    <div class="form-group py-4">
                        <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-lg float-right" id="btnLogin">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">      
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="./pics/belltower.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Volunteers Needed</h1>
            <p>We will be hosting a VEX competition on October 26th in the Firebird Fieldhouse. Parents and community members can use the button below to sign up for a slot. This event would not happen without your continued support!</p>
            <p><a class="btn btn-lg btn-primary" href="about.php" role="button">About Us</a></p>
          </div>
        </div>
      </div>

  <!-- <div class="carousel-item">
       <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>-->
       <!--
        <img src="./pics/lab2.JPG">
        <div class="container"> 
          <div class="carousel-caption text-left">
            <h1>242 Firebirds</h1>
            <p>Hosted at Holy Ghost Preparatory School, we are a competitive VEX Robotics team.</p>
            <p><a class="btn btn-lg btn-danger" href="about.html" role="button">Read More</a></p>
          </div>
        </div>
      </div>  -->
      <!--
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
      -->
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<?php
$sql = "SELECT * FROM FirstHeading"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo "
  <div class='container marketing'>

      <div class='row featurette'>
          <div class='col-md-7'>
            <h2 class='featurette-heading'>". $row['Title']."</h2>
            <p class='lead'>". $row['Description']."</p>
          </div>
          <div class='col-md-5'>
            <!-- <svg class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 500x500'><title>Placeholder</title><rect width='100%' height='100%' fill='#eee'/><text x='50%' y='50%' fill='#aaa' dy='.3em'>500x500</text></svg> -->
            <img class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500' height='500' src='./pics/" . $row['Picture'] . "'>
          </div>
        </div>
        ";
      }
    } else { 
      echo "0 results";
    }
    
    
?>
        <hr class="featurette-divider">
        <div class="row">
<!-- Puneet Gupta made this -->
<?php
$sql = "SELECT * FROM CabinetMembers"; 
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo "

    <!-- Three columns of text below the carousel -->
  
      <div class='col-lg-4'>
        <img class='bd-placeholder-img rounded-circle' width='140' height='140' src='./pics/" . $row['Picture'] . "'>
        <h2>". $row['Role']."</h2>
        <p>  " . $row['firstname'] . " ". $row['lastname'] . "</p>
       
  <p> <a class='btn btn-secondary' data-toggle='modal' href= '#". $row['lastname'] . "' role='button'>View details &raquo;</a> </p> 
      
      </div>
      ";
    }
  } else { 
    echo "0 results";
  }
  
  ?>
  </div> 

 <?php
 
 $sql = "SELECT * FROM CabinetMembers";


  if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
      echo "
      <div class='modal fade' id= ". $row['lastname'] . " tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered' role='document'>
       <div class='modal-content'>
         <div class='modal-header'>
           <h5 class='modal-title' id='exampleModalLongTitle'>" . $row['firstname'] . " ". $row['lastname'] . "</h5>
           <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
           </button>
         </div>
         <div class='modal-body'>
             <img class='img-fluid' src = ''". $row['Modal Picture'] . "''/>
           ". $row['Modal Paragraph'] ." 
         </div>
         <div class='modal-footer'>
           <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
         </div>
       </div>
      </div>
      </div>

    
    ";
  }
} else { 
  echo "0 results";
}
mysqli_close($conn);

?>


        <!-- Two columns of text below the carousel -->
        <div class="row">
                <div class="col-lg-6">
                  <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                  <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./pics/petcaugh1.JPG">
                  <h2>Brandon Petcaugh</h2>
                  <p>Head Coach. Mr. Petcaugh is also the Department Chair for Computer Science and Engineering at Holy Ghost Prep.</p>
                  <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-6">
                  <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                  <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./pics/bushek1.JPG">
                  <h2>Kevin Bushek</h2>
                  <p>Assistant Coach. Mr. Bushek also teaches the Engineering courses at Holy Ghost Prep.</p>
                  <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">
<!--
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>
-->
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'; ?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>      
</body>
</html>
