
<?php 
include("connectdb.php"); 
require("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'head.php'; ?>
    <style>

    </style>

  </head>
  <body>
    <header>
    <?php $page = 'meettheteam'; include 'navbar.php'; ?>
</header>

<main role="main">

  <div class="container noCarouselpadding">
        <h1>Meet the Team</h1>
        
        <p>These are current prospective members of the 2020-2021 season for the HGP Robotics team.</p>

        <?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$usercount = 0; //to get 3 users to a row
$justdivved = 0; //to help with final row div

if (mysqli_num_rows($result) > 0) {
// output data of each row
echo "<div class='row' style='width:100%;'>";
while($row = mysqli_fetch_assoc($result)) {

    $dir = './pics/profiles/' . $row['username'];
    $fileNames = array();
    if(is_dir($dir)){
        $handle = opendir($dir);
        while(false !== ($file = readdir($handle))){
            if(is_file($dir.'/'.$file) && is_readable($dir.'/'.$file)){
                    $fileNames[] = $file;
            }
        }
        closedir($handle);
        $fileNames = array_reverse($fileNames);
        rsort($fileNames);
        //print_r($fileNames);
    }else {
        echo "<p>Error: There is an directory read issue</p>";
    }

    $usercount++;

    if ($justdivved == 1) {
        echo "<div class='row' style='width:100%;'>";
        $justdivved = 0;
    }

    echo "<div class='mx-auto col-4 col-md-4 col-sm-12 col-xs-12' style='padding-top:20px; padding-bottom: 20px;border-radius:15px;'>";
    echo "<div class='card mx-auto' style='width:90%;background:#a41e34;color:#fff;border:1px solid #a41e34;'>";
        echo "<img class='card-img-top' src='./pics/profiles/" . $row["username"] . "/" . $fileNames[0] . "' alt='Profile Picture'>";
        echo "<div class='card-body'>";
            if ($row["accessLevel"] == 'root') {
                echo "<h4 class='card-title'>Mr. " . $row["lastname"] . "</h4>";
                echo "<p class='card-text'><i>Coach</i></p>";
            } else {
                echo "<h4 class='card-title'>" . $row["firstname"] . " " . $row["lastname"] . "</h4>";
                echo "<p class='card-text'><i>Grade: " . $row["grade"] . "</i></p>";
            }

        echo "</div>";
    echo "</div>";
echo "</div>";

if ($usercount > 0 && $usercount % 3 == 0) {
    echo "</div>";
    $justdivved = 1;
}

}

//add div if you didn't just conclude with a row
if($justdivved == 0) {
    echo "</div>";
}


} else {
echo "Currently No Members on the Team";
}

mysqli_close($conn);
?>


  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'; ?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>      
</body>
</html>