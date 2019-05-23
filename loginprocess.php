<!--file data.php -->
<?php
	$dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	// get name and password passed from client
    echo "HELLO";
    echo $_POST['email'];

    
    /*
	// Checks if given username exists within the table
	$sqlEmailCheck = "SELECT user_email FROM plantatree WHERE user_email='$email';";
	$sqlQueryEmail = mysqli_query($conn, $sqlEmailCheck);
	$sqlResultEmail = mysqli_fetch_assoc($sqlQueryEmail);

	if(empty($sqlResultEmail["user_email"])){
		echo "Email does not exist";
	}
	else { // Perform password check
		$sqlPasswordCheck = "SELECT user_passwords FROM plantatree WHERE user_name='$email';";
		$sqlQueryPassword = mysqli_query($conn, $sqlPasswordCheck);
		$sqlResultPassword = mysqli_fetch_assoc($sqlQueryPassword);

		if($sqlResultPassword["user_password"] == $pwd){
			header("home.html"); 
            exit();
		}
		else{
			echo "Password is incorrect";
		}
    }
    */
?>
