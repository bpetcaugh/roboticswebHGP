<?php

    require("functions.php");

    $myusername=strip($_POST['username']);
    $mypassword=strip($_POST['password']);

    

    //$mypassword = md5($mypassword);
    

    if(!$conn) {
        die();
        setAlert("danger", "Cannot connect to the database. Please try again soon.");
        header("location: index.php");
    }


    if(checkToken($_POST['token'])){
        
        $sql = "SELECT * FROM users WHERE username= '$myusername'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row["password"] == $mypassword) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            if ($row['accessLevel'] == 'root') {
                $_SESSION["setAccessLevel"] = true;
                header("location: userDash.php");
            } else {
                $_SESSION["setAccessLevel"] = false;
                header("location: userDash.php");
            }
        }else{
            setAlert("danger", "Login failed. Please try again.");
            header("location: index.php");
        }
    }else{
        setAlert("danger", "Error. Please try logging in again.");
        header("location: index.php");
    }
    
    mysqli_close($conn);

 ?>
