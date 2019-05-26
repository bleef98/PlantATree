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

    $sqlPasswordCheck = "SELECT user_pwd FROM plantatree WHERE user_email='$email';";
		$sqlQueryPassword = mysqli_query($conn, $sqlPasswordCheck);
		$sqlResultPassword = mysqli_fetch_assoc($sqlQueryPassword);

    if($sqlEmailResult["user_email"] == $email && $sqlResultPassword["user_pwd"] == $pwd) {
            header("Location: https://plant-trees.herokuapp.com/home.html");
        }
		else{
            echo "<script> alert('Wrong Details Entered!'); window.Location='https://plant-trees.herokuapp.com/home.html'</script>";
        }

?>
