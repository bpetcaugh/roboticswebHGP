<<<<<<< HEAD
<?php include $_SERVER['DOCUMENT_ROOT']."/includes_robot/connectdb.php"; ?>


<?php 
/*
if( isset ( $_POST[teamName] && !empty ($_POST[teamName])  ) ) { 
=======
<?php include "connectdb.php"; ?>


<?php 
>>>>>>> master

if( isset( $_POST['teamName']) && !empty($_POST['teamName'])  ) { 
  echo "<br><br><br><br>We here now!";
    $sql = "INSERT INTO Teams (TeamName, TeamNumber, TeamMembers, Awards, TeamPicture, TeamBio, RobotName)
    VALUES ('" .$_POST['teamName'] . "', '0', '', '', '', '', '')";

    if (mysqli_query($conn, $sql)) {
      echo "<br><br><br><br>";
        echo "New record created successfully";
    } else {
      echo "<br><br><br><br>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
  echo "<br><br><br><br>We couldn't do that thang!";
}

mysqli_close($conn);
*/
?>



<!doctype html>
<html lang="en">
  <head>
  <?php include $_SERVER['DOCUMENT_ROOT']."/includes_robot/head.php"; ?>
  </head>
  <body>
    <header>
    <?php include $_SERVER['DOCUMENT_ROOT']."/includes_robot/navbar.php"; ?>
    </header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container noCarouselpadding">

        <div class="alert alert-danger" data-dismiss="alert" role="alert">
                Connected successfully!
        </div>

        <!--
          Team ToDo List:
          ------------Early Days---------------------------
          -Team Goggles
          -Team Captain completes Referee Training
          -Engineering Journal: Introduce Team Members
          -Engineering Journal: Explain the challenge, with strategies
          -Engineering Journal: Sketch first design
          -Engineering Journal: First pages of day-to-day work
          -Build a base
          -Code base to drive
          -Put code base in the CLOUD
          ------------ October  ---------------
          -Pick up a cube
          -Stack 2-3 cubes
          
          ------------ Night Before Competition  ---------------




          pictures
          team bio
          team name / number
          team members
          robot name
        -->


        <?php
		$sql = "SELECT * FROM Teams";
$result = mysqli_query($conn, $sql);
		
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           echo "
            <div class='card'>
            <div class='card-header col-md-12'>
                " . $row['Team Name'] . " - " . $row['Team Number'] . "
            </div>
            <div class='card mb-12 box-shadow'>
            <img class=\"card-img-top\" src=\"./pics/" . $row['Team Picture'] . "\" alt=\"Card image cap\">
            <div class='card-body'>
                <p>This is the team titled " . $row['Team Name'] . " and numbered " . $row['Team Number'] . " . The name of their robot is " . $row['Robot Name'] . ". The members in their team are " . $row['Team Members'] . ". TEAM AWARDS include: " . $row['Awards'] . ". A little bit about their team: " . $row['Team Bio'] . ".</p>
            </div>
            </div>
            </div>
            <br><br>

            
            ";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
?>   

<!--
<form action="" method="post">
Name: <input type="text" name="teamName"><br>
<input type="submit">
</form>
  -->

  <!-- FOOTER -->
  <footer class="container">
  <?php include $_SERVER['DOCUMENT_ROOT']."/includes_robot/footer.php"; ?>
  </footer>
</main>

<?php include $_SERVER['DOCUMENT_ROOT']."/includes_robot/bootstrapScripts.php"; ?>
 </body>
</html>

