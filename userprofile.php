<?php 
include("connectdb.php"); 
require("functions.php");
checkSession(); //Kick logged out users back to index page.

if(isset($_POST['accessLevel']) )
{
    $un = $_POST['userName'];
    $fn = $_POST['firstName'];
    $ln = $_POST['lastName'];
    $e = $_POST['email'];
    $o = $_POST['office'];
    $cc = $_POST['costCode'];
    $al = $_POST['accessLevel'];
    $p = $_POST['password'];

    $sql = "INSERT INTO users (username, password, firstname, lastname, email, office, costcode, accessLevel)
    VALUES ('{$un}', '{$p}','{$fn}', '{$ln}', '{$e}', '{$o}', '{$cc}', '{$al}')";

    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: userList.php');
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    
}

?>

<!DOCTYPE html>
<html>

<head>
	<?php include("head.php"); ?>
	<link rel="stylesheet" type="text/css" href="userStyle.css">
</head>

<body style="padding-top: 0rem;padding-bottom: 0rem;">
<div class="wrapper">
		<!-- Sidebar -->
		<?php include("userSidebar.php"); ?>

		<div id="content">
			<div class="header">
				<div class="row">
					<nav class="navbar">
						<div class="container-fluid">
							<button type="button" id="sidebarCollapse" class="navbar-btn">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
						-->
						</div>
                    </nav>
					<img src="./pics/242logo.png" alt="242" style="height: 125px;" class="headerLogo">
				</div>
			</div>
			<div class="body-wrapper">
                <!-- Your code goes here -->

				<h1>My Profile</h1>

                <div style="margin-top: 30px;">
                    <?php

                        $sql = "SELECT * FROM users where id={$_SESSION['id']}";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $timeStamp = $row['dateCreated'];
                            $timeStamp = date( "m/d/Y", strtotime($timeStamp));

                            echo "<p><b>Name:</b> " . $row["firstname"] . " ". $row["lastname"] . "</p>";
                            echo "<p><b>UserName:</b> " . $row["username"]. "</p>";
                            echo "<p><b>Profile Created:</b> " . $timeStamp . "</p>";
                            echo "<p><b>Email:</b> " . $row["email"] . "</p>";
                            echo "<p><b>Office:</b> " . $row["office"] . "</p>";
                            echo "<p><b>Cost Code:</b> " . $row["costCode"] . "</p>";
                            echo "<p><b>Access Level:</b> " . $row["accessLevel"] . "</p>";

                            echo "<div class='btn-group'>
                                <a class='btn btn-primary' href='userEdit.php?id=" . $_SESSION["id"] . "&page=profile'>Edit Information</a>

                                <a class='btn btn-danger' href='userChangePW.php?id=" . $_SESSION["id"] . "'>Change Password</a>
                        </div>";

                        }
                        } else {
                        echo "Currently No Users In the Database";
                        }

                        mysqli_close($conn);
                    ?>

				</div>
            </div>
        </div>
    </div>

	<?php include 'bootstrapScripts.php'; ?>   
	<script src="sidetoggle.js"></script>
</body>
</html>