<?php 
include("connectdb.php"); 
require("functions.php");
checkSession(); //Kick logged out users back to index page.

//Get picture files in profile folder
$dir = './pics/profiles/'.$_SESSION['username'];
$fileNames = array();
$numOfFiles = 0;
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
    $numOfFiles = count($fileNames);
}else {
    echo "<p>Error: There is an directory read issue</p>";
}

//Get rid of button if they have checked
if(isset($_GET['status'])){
        update_checklist($_SESSION['id'],"checkcontacts");
}

//Profile picture upload
if(isset($_FILES['image']) && count($numOfFiles) < 9){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be less than 2 MB';
    }
    
    if(empty($errors)==true) {
        //delete file first
        $new_filename = "./pics/profiles/". $_SESSION["username"] . "/" .$_SESSION["username"] . strval($numOfFiles) . "." . $file_ext;


       //move_uploaded_file($file_tmp,"./pics/profiles/".$file_name); //keep filename that user chose
       move_uploaded_file($file_tmp,$new_filename);
       //echo "Success: Added " . $new_filename;

        update_checklist($_SESSION['id'],"addprofilepic");

        //kill old profile pic
        $blank_filename = "./pics/profiles/". $_SESSION["username"] . "/blank-prof.png";
                if(file_exists($blank_filename)) {
            chmod($blank_filename,0755); //Change the file permissions if allowed
            unlink($blank_filename); //remove the file
        }
        header("Refresh:0");

    }else{
       print_r($errors);
    }
    
 }

// if(isset($_POST['accessLevel']) )
// {
//     $un = $_POST['userName'];
//     $fn = $_POST['firstName'];
//     $ln = $_POST['lastName'];
//     $e = $_POST['email'];
//     $o = $_POST['office'];
//     $cc = $_POST['costCode'];
//     $al = $_POST['accessLevel'];
//     $p = $_POST['password'];

//     $sql = "INSERT INTO users (username, password, firstname, lastname, email, office, costcode, accessLevel)
//     VALUES ('{$un}', '{$p}','{$fn}', '{$ln}', '{$e}', '{$o}', '{$cc}', '{$al}')";

//     echo $sql;

//     if (mysqli_query($conn, $sql)) {
//         echo "New record created successfully";
//         header('Location: userList.php');
//     } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }

//     mysqli_close($conn);
    
// }

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

				<h1>My Profile</h1>

                <div style="margin-top: 30px;">

                    <img src="<?php echo "./pics/profiles/" . $_SESSION["username"] . "/" . $fileNames[0]; ?>" style="width:150px; height: 150px;"/>
                    <br>

                        <form action = "" method = "POST" enctype = "multipart/form-data" style="border: 1px blue solid;padding: 5px;margin: 5px;border-radius: 10px;width:400px;">
                            <input type = "file" value="Choose Picture" name = "image" />
                            <input type = "submit" />      
                        </form>
                    <br>

                    <p><i><b>Please check the information below to confirm it is correct. Email your coach with any discrepancies.</b></i></p>

                    <?php

                        $sql = "SELECT * FROM users where id={$_SESSION['id']}";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            //Format birthday
                            $bd = $row['birthday'];
                            $bd = date( "m/d/Y", strtotime($bd));

                            echo "<p><b>Name:</b> " . $row["firstname"] . " ". $row["lastname"] . "</p>";
                            echo "<p><b>UserName:</b> " . $row["username"]. "</p>";
                            echo "<p><b>Birthday:</b> " . $bd . "</p>";
                            echo "<p><b>Email:</b> " . $row["email"] . "</p>";
                            echo "<p><b>Access Level:</b> " . $row["accessLevel"] . "</p>";
                            echo "<p><b>Nickname:</b> " . $row["nickname"] . "</p>";
                            echo "<p><b>School:</b> " . $row["school"] . "</p>";
                            echo "<p><b>Grade:</b> " . $row["grade"] . "</p>";
                            echo "<p><b>T-Shirt Size:</b> " . $row["tshirtsize"] . "</p>";
                            echo "<p><b>Long Sleeve Size:</b> " . $row["longtsize"] . "</p>";
                            echo "<p><b>Sweatshirt Size:</b> " . $row["sweatshirtsize"] . "</p>";
                            echo "<p><b>Primary Contact Name:</b> " . $row["primName"] . " (" . $row["primRole"] .")</p>";
                            echo "<p><b>Primary Contact Email:</b> " . $row["primEmail"] . "</p>";
                            echo "<p><b>Primary Contact Number:</b> " . $row["primNum"] . "</p>";

                            echo "<p><b>Secondary Contact Name:</b> " . $row["secName"] . " (" . $row["secRole"] .")</p>";
                            echo "<p><b>Secondary Contact Email:</b> " . $row["secEmail"] . "</p>";
                            echo "<p><b>Secondary Contact Number:</b> " . $row["secNum"] . "</p>";

                            /*echo "<div class='btn-group'>
                                <a class='btn btn-primary' href='userEdit.php?id=" . $_SESSION["id"] . "&page=profile' disabled='disabled'>Edit Information</a>

                                <a class='btn btn-danger' href='userChangePW.php?id=" . $_SESSION["id"] . "' disabled='disabled'>Change Password</a>
                        </div>";*/

                        }
                        } else {
                        echo "Could not find your information in the database.";
                        }

                        $sql = "SELECT * FROM checklist where uid={$_SESSION['id']} and checkcontacts=1";
                        $result = mysqli_query($conn, $sql);

                        $checkcontact_var = 0;

                        if (mysqli_num_rows($result) > 0) {
                            $checkcontact_var = 1;
                        }


                        mysqli_close($conn);
                    ?>

                    <?php
                        if ($checkcontact_var == 0) {
                            echo "<hr />";
                            echo "<p><i><b>Click below to confirm that all information is correct.</b></i></p>";
                            echo "<a class='btn btn-success' href='userprofile.php?status=1'>Correct</a>";
                        }
                    ?>

				</div>
            </div>
        </div>
    </div>

	<?php include 'bootstrapScripts.php'; ?>   
	<script src="sidetoggle.js"></script>
</body>
</html>