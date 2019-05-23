<!--file data.php -->
<?php
	$dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	// get name and password passed from client
	$email = $_POST['email'];
    $pwd = $_POST['password'];
    
    echo $email;
    echo $pwd;

    $sqlCheckEmail = "SELECT user_email FROM plantatree WHERE user_email='$email';";
    $sqlQueryEmail = mysqli_query($conn, $sqlCheckEmail);
    $sqlEmailResult = mysqli_fetch_assoc($sqlQueryEmail);

    if(empty($sqlEmailResult["user_email"])){
		echo "Email does not exist";
	}
	else { // Perform password check
		echo "Email Exists";
	}
?>
