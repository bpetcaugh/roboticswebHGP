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

				<h1>Swag</h1>

				<div style="margin-top: 30px;">
					<p>Students will use this page to access/request different team items.
					</p>
                    <br>
                    <table style="border:1px solid red; background: #19407d; color: red;">
                        <tr>
                            <th colspan="2" style="border:1px solid red; background: red; color: #19407d; text-align: center;">Possible Team Shirt Design #1</th>
                        </tr>
                        <tr>
                            <td><img src="./pics/swag/front_shirt_testred.png" alt="shirt" style="height: 300px;"></td>
                            <td><img src="./pics/swag/back_shirt_testred.png" alt="shirt" style="height: 300px;"></td>
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