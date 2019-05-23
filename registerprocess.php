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

    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS plantATree (
                            fName varchar(30), 
                            lName varchar(256), 
                            userEmail varchar(30), 
                            userPWD Date, 
                            userCompany varchar(30));";

        mysqli_query($conn, $sqlCreateTable);

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $company = $_POST['company'];
    //$acc_type = $_POST['acc_type'];

    echo $_POST['fName'];
    
    
    $insert = "INSERT INTO plantATree(fName, lName, email, pwd, company)
            VALUES('$fName', '$lName', '$email', '$pwd', '$company');";

    mysqli_query($conn, $insert);
    
    ?>

</body>

</html>