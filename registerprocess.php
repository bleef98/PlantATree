<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta http-wquiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
    <?php
    echo "Register Process PHP";

    $dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS poststatus (
        status_code varchar(30), 
        status_text varchar(256), 
        status_share varchar(30), 
        status_date Date, 
        status_perm varchar(30));";
    /*
    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS plantATree(
                            fName varchar(30), 
                            lName varchar(30), 
                            userEmail varchar(30), 
                            userPWD varchar(30, 
                            userCompany varchar(30));";*/

    mysqli_query($conn, $sqlCreateTable);


    echo "change 1.2";
    echo $_POST['fName'];
    
    
    ?>

</body>

</html>