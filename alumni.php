<?php session_start(); 

//Step 4
$servername = "localhost";
$username = "robotics";
$password = "242forlife";
$dbname = "robotics";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Step 5
$sql = "SELECT * FROM alumni";
$result = mysqli_query($conn, $sql);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Alumni Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    

    <!-- Custom styles for this template -->
    <link href="242styles.css" rel="stylesheet">
  </head>

  <body>

    <header>
    <?php include("./includes/navbar.php"); ?>
      </header>

      <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./pics/thumbnail.PNG" class="d-block w-100" alt="thumbnail">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <img src="./pics/thumbnail.PNG" class="d-block w-100" alt="thumbnail">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./pics/thumbnail.PNG" class="d-block w-100" alt="thumbnail">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
                  
      <div class="album py-5 bg-light">
          <div class="container">
            

     
    
          
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo "
     <!---Jack--->
     <div class='row'>
       <div class='col-md-4'>
         <div class='card mb-4 box-shadow'>
           <img class='card-img-top' src='./pics/thumbnail.PNG' alt='Card image cap'>
           <div class='card-body'>
             <p class='card-text'>" . $row['Card Description'] . "</p>
             <div class='d-flex justify-content-between align-items-center'>
               <div class='btn-group'>
                 <button type='button' data-toggle='modal' data-target='#". $row['lastname'] . "' class='btn btn-sm btn-outline-secondary'>View More</button>
                
                
                 <!-- Modal for more information -->
<div class='modal fade' id='". $row['lastname'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
 <div class='modal-content'>
   <div class='modal-header'>
     <h5 class='modal-title' id='exampleModalLongTitle'>" . $row['firstname'] . " ". $row['lastname'] . "</h5>
     <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>
   <div class='modal-body'>
       <img class='img-fluid' src = './pics/thumbnail.PNG'/>
     ". $row['Modal Paragraph'] ." 
   </div>
   <div class='modal-footer'>
     <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
   </div>
 </div>
</div>
</div>
<button type='button' data-toggle='modal' data-target='#get_in_touch_with_". $row['lastname'] . "' class='btn btn-sm btn-outline-secondary'>Get in Touch</button>

<!---Modal for get in touch w/ jack-->
<div class='modal fade' id='get_in_touch_with_". $row['lastname'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
 <div class='modal-content'>
   <div class='modal-header'>
     <h5 class='modal-title' id='exampleModalLongTitle'>Modal title</h5>
     <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>
   <div class='modal-body'>
   To get in contact with ". " " . $row['firstname'] . " " . $row['lastname'] . " " . " please email our alumni team at ". " " . $row['Email'] . "
   <div class='modal-footer'>
     <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
   </div>
 </div>
</div>
</div>
               </div>
               <small class='text-muted'>" . $row['firstname'] . " ". $row['lastname'] . "</small>
             </div>
           </div>
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
</main>
</div>
</div>
    <div class="container noCarouselpadding">  

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Need even more information?</p>
        <p>Get in touch with our alumni office at: some random email</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
        
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
