
<?php include 'connectdb.php'; ?>


<?php 

/*
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
  <?php include 'head.php'; ?>
  </head>
  <body>
    <header>
    <?php $page = 'teams'; include 'navbar.php'; ?>
    </header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container noCarouselpadding">

        <!--<div class="alert alert-danger" data-dismiss="alert" role="alert">
                Connected successfully!
        </div>-->

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
		$sql = "SELECT * FROM students WHERE (photoform=0 or regfee=0) and currentteam != 'NA';";
$result = mysqli_query($conn, $sql);
		
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "
        <h3>
        Students Who Need to Submit Items
        </h3>
        <p>If you are listed below, you did not submit your photo release form, participation fee, or both. You can no longer participate in any events until those items have been submitted.</p>
        <table border=1>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Team</th>
      </tr>
        ";
        while($row = mysqli_fetch_assoc($result)) {
           echo "
              <tr>
                <td>".$row['firstname'] . "</td>
                <td>". $row['lastname']."</td>
                <td>". $row['currentteam'] ."</td>
              </tr>
            
            ";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    //mysqli_close($conn);
echo "<br><hr><br>";

    $sql = "SELECT * FROM students WHERE (photoform=1 and regfee=1) and currentteam != 'NA';";
    $result = mysqli_query($conn, $sql);
        
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            echo "
            <h3>
            Students Ready to Compete
            </h3>
            <p>If you are listed below, you do not need to do anything else at this time. You are ready to go!</p>
            <table border=1>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Team</th>
          </tr>
            ";
            while($row = mysqli_fetch_assoc($result)) {
               echo "
                  <tr>
                    <td>".$row['firstname'] . "</td>
                    <td>". $row['lastname']."</td>
                    <td>". $row['currentteam'] ."</td>
                  </tr>
                
                ";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);

        echo "<br><hr><br>";

        echo "<h2>If you are not listed anywhere, you are not even on record as a member of the team, and need to submit everything ASAP.</h2>";

        ?>   

        <?php
        //Uncomment to add back in the team cards
        /*
		$sql = "SELECT * FROM Teams";
$result = mysqli_query($conn, $sql);
		
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           echo "
            <div class='card'>
            <div class='card-header col-md-12'>
                " . $row['TeamName'] . " - " . $row['TeamNumber'] . "
            </div>
            <div class='card mb-12 box-shadow'>
            <img class=\"card-img-top\" src=\"./pics/" . $row['TeamPicture'] . "\" alt=\"Card image cap\">
            <div class='card-body'>
                <p>This is the team titled " . $row['TeamName'] . " and numbered " . $row['TeamNumber'] . " . The name of their robot is " . $row['RobotName'] . ". The members in their team are " . $row['TeamMembers'] . ". TEAM AWARDS include: " . $row['Awards'] . ". A little bit about their team: " . $row['TeamBio'] . ".</p>
            </div>
            </div>
            </div>
            <br><br>

            
            ";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);*/
?>   

<!--
<form action="" method="post">
Name: <input type="text" name="teamName"><br>
<input type="submit">
</form>
  -->

  <!-- FOOTER -->
  <footer class="container">
  <?php include 'footer.php'; ?>
  </footer>
</main>

<?php include 'bootstrapScripts.php'; ?>
 </body>
</html>

