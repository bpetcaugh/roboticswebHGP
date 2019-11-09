<?php session_start(); 

include 'connectdb.php';?> 


<!doctype html>
<html lang="en">
  <head>
   <?php include 'head.php';?> 
  </head>

  <body>

    <header>
    <?php include 'navbar.php'; ?>
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


        <main role="main">

        <div class="container noCarouselpadding">  
                  
      
        <div class="album py-5 bg-light">
          <div class="container">
            

     
          <div class="row">
          
<?php


$sql = "SELECT * FROM alumni";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo "

 
       <div class='col-md-4'>
         <div class='card mb-4 box-shadow'>
           <img class='card-img-top' src='./pics/thumbnail.PNG' alt='Card image cap'>
           <div class='card-body'>
             <p class='card-text'>" . $row['Card Description'] . "</p>
             <div class='d-flex justify-content-between align-items-center'>
               <div class='btn-group'>
                 <button type='button' data-toggle='modal' data-target='#". $row['lastname'] . "' class='btn btn-sm btn-outline-secondary'>View More</button>
                 <button type='button' data-toggle='modal' data-target='#get_in_touch_with_". $row['lastname'] . "' class='btn btn-sm btn-outline-secondary'>Get in Touch</button>

                 </div>
                 <small class='text-muted'>" . $row['firstname'] . " ". $row['lastname'] . "</small>
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
  </div>
  <?php
  $sql = "SELECT * FROM alumni";

if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result2)) {
     echo "

                
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

    

      
      ";
  }
} else { 
  echo "0 results";
}


mysqli_close($conn);
?>  


</div>
</div>
</div>


    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Need even more information?</p>
        <p>Get in touch with our alumni office at: some random email</p>
      </div>
    </footer>
</main>
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
