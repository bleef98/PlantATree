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

    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS plantatree (
        f_name varchar(30), 
        l_name varchar(256), 
        user_email varchar(30), 
        user_pwd varchar(30), 
        user_company varchar(30));";
    /*
    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS plantATree(
                            fName varchar(30), 
                            lName varchar(30), 
                            userEmail varchar(30), 
                            userPWD varchar(30, 
                            userCompany varchar(30));";*/

    mysqli_query($conn, $sqlCreateTable);

    $sqlPostDB = "INSERT INTO plantatree (f_name, l_name, user_email, user_pwd, user_company)
                    VALUES('$_POST['fName']', '$_POST['lName']', '$_POST['email']', '$_POST['pwd']', '$_POST['company']');";
    
    mysqli_query($conn, $sqlPostDB);

    echo "change 1.6";
    echo $_POST['fName'];
    
    
    ?>

</body>

</html>