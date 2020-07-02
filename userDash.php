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

				<h1><?php echo "Welcome to the team page, <i> " . getUserInfo($_SESSION['id'], "username") . ".</i>"; ?></h1>
<hr />
<?php 

$sql = "SELECT * FROM checklist where uid={$_SESSION['id']} and checkcontacts=1";
$result = mysqli_query($conn, $sql);

$checkcontact_var = 0;

if (mysqli_num_rows($result) > 0) {
	$checkcontact_var = 1;
}

$sql = "SELECT * FROM checklist where uid={$_SESSION['id']} and addprofilepic=1";
$result = mysqli_query($conn, $sql);

$addprofile_var = 0;

if (mysqli_num_rows($result) > 0) {
	$addprofile_var = 1;
}
?>
				<div style="margin-top: 30px;">
					<p><i><b>More tasks will be added to this main page as the season progresses.</b></i></p>
					<h2>Member To-Do List</h2>
					<table style="border-collapse:separate; border:none; padding: 20px; width: 60%; border-spacing:0 15px; ">
						<tr style="margin: 10px;height: 65px;">
							<td style="width:20%;background:<?php echo ($checkcontact_var == 1) ? "green" : "red"; ?>;text-align: center; padding: 10px;"></td>
							<td style="width:80%;padding: 10px;">Go to the "My Profile" tab and make sure your information is correct.</td>
						</tr>

						<tr style="margin: 10px;height: 65px;">
							<td style="width:20%;background:<?php echo ($addprofile_var == 1) ? "green" : "red"; ?>;text-align: center; padding: 10px;"></td>
							<td style="width:80%;padding: 10px;">Go to the "My Profile" tab and add a picture of yourself. (school appropriate, preferably headshot -- it will be made public)</td>
						</tr>
					</table>



					<!--<div style="">
						<video width="600" controls>
							<source src="./res/dcf_logintest2.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>-->
				</div>
            </div>
        </div>
    </div>

	<?php include 'bootstrapScripts.php'; ?>   
	<script src="sidetoggle.js"></script>
</body>
</html>