<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
    <meta http-wquiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <?php
    $dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sqlEmailCheck = "SELECT user_email FROM plantatree WHERE user_email='$email';";
    $sqlQueryEmail = mysqli_query($conn, $sqlEmailCheck);
    $sqlResultEmail = mysqli_fetch_assoc($sqlQueryEmail);

    if (empty($sqlResultEmail["user_email"])) {
        echo "That email is incorrect/not registered";
    } 
    
    else{ // Perform password check
        $sqlPasswordCheck = "SELECT user_pwd FROM plantatree WHERE user_email='$email';";
        $sqlQueryPassword = mysqli_query($conn, $sqlPasswordCheck);
        $sqlResultPassword = mysqli_fetch_assoc($sqlQueryPassword);

        if (empty($sqlResultPassword["user_pwd"]) {
            echo "Password is incorrect";
        }

        else{
            if(isset($_POST["submit"])){
                header('Location:home.html');
            }
            
        }
    }


    ?>




</body>


</html>