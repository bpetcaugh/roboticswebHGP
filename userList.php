
<?php 
include("connectdb.php"); 
require("functions.php");
checkSession(); //Kick logged out users back to index page.
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
						</div>
                    </nav>
					<img src="./pics/242logo.png" alt="242" style="height: 125px;" class="headerLogo">
				</div>
			</div>
			<div class="body-wrapper">
				<!-- Your code goes here -->

				<h1>Current Team Members</h1>

				<div style="margin-top: 30px;">
                    
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Username</th>
                        <th scope="col">User Added</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Office</th>  
                        <th scope="col">Cost Code</th>                     
                        <th scope="col">Access Level</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php

                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $timeStamp = $row['dateCreated'];
                        $timeStamp = date( "m/d/Y", strtotime($timeStamp));

                        echo "<tr>";
                        echo "<th scope='row'>" . $row["username"]. "</th>";
                        echo "<td>" . $timeStamp  . "</td>";
                        echo "<td>" . $row["firstname"]  . "</td>";
                        echo "<td>" . $row["lastname"]  . "</td>";
                        echo "<td>" . $row["email"]  . "</td>";
                        echo "<td>" . $row["office"]  . "</td>";
                        echo "<td>" . $row["costCode"]  . "</td>";
                        if ($row["accessLevel"] == 'root') {
                            echo "<td>admin</td>";
                        } else {
                            echo "<td>" . $row["accessLevel"]. "</td>";                      
                        }


                        if($_SESSION["id"] == $row["id"]) {
                            echo "<td>
                                <a class='btn btn-primary' href='userEdit.php?id=" . $row["id"] . "'>Edit</a>
                            </td>
                            ";
                        } else {

                        echo "<td>

                        <div class='btn-group'>
                            <a class='btn btn-primary' href='userEdit.php?id=" . $row["id"] . "'>Edit</a>
    
                            <a class='btn btn-danger' href='userDelete.php?id=" . $row["id"] . "'>Delete</a>
                        </div>
                        </td>
                        ";
                        }


                    echo "</tr>";

                    }
                    } else {
                    echo "Currently No Users In the Database";
                    }

                    mysqli_close($conn);
                    ?>
                    </tbody>
                </table>

                <!--<a class="btn btn-primary" href="userAdd.php">Add New User</a>-->
                
				</div>
            </div>
        </div>
    </div>

	<?php include 'bootstrapScripts.php'; ?>   
	<script src="sidetoggle.js"></script>
</body>
</html>
