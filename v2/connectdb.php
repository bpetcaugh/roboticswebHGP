<?php

session_start();

$servername = "localhost";
$username = "robotics";
$password = "242forlife";
$dbname = "robotics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
    //echo '<div class="alert alert-danger" data-dismiss="alert" role="alert">';
      //  echo 'Can not connect to database.';
   // echo '</div>';
   // die("Connection failed: " . $conn->connect_error);
//}
//echo "<br><br><br>";
//echo '<div class="alert alert-success" data-dismiss="alert" role="alert">';
  //  echo 'Connected successfully!';
//echo '</div>';

?>