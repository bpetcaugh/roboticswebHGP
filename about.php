<!-- Puneet Gupta made this page -->
<?php include 'connectdb.php'; ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>
    <link href="242styles.css" rel="stylesheet">
  </head>

  <body>

    <header>
    <?php $page = 'about'; include 'navbar.php'; ?>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">About Us</h1>
          <p class="lead text-muted">In response to the growing interest of students, the burgeoning of STEM careers, and the school’s commitment to innovation HGP successfully launched a VEX Robotics program in 2017.</p>
          <p>
            <a href="https://photos.app.goo.gl/xyWnv2AFsSuxoCH37" class="btn btn-primary my-2">Go to our team album</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
          
            <div class="row d-flex justify-content-center" >
                    <div style = "padding: 25px;">
                    
<?php 
$sql = "SELECT * FROM AboutPage";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo "
        <div class ='card' style='width: 90rem; '>
                <div class = 'container mx-auto'>
                <div class='card-body'>
                  <h5 class='card-title'>". $row['CardTitle']."</h5>
                 
                  <p class='card-text'>  ". $row['CardContent']." </p>
              
                </div>
                </div>
               </div>
               </div>

            <div style = 'padding: 25px;'>

            ";
          }
        } else { 
          echo "0 results";
        }
        
        
        mysqli_close($conn);
        ?>  
       


    </main>

    <footer class="text-muted">
    <?php include 'footer.php'; ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?php include 'bootstrapScripts.php';  ?>
  </body>
</html>
