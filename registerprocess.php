<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta http-wquiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

    <h1> REJISTER </h1>

    <?php

    $dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


    $sqlTableCheck = "CREATE TABLE IF NOT EXISTS customers(
        fName VARCHAR(50),
        lName VARCHAR(50),
        email VARCHAR(70),
        pwd VARCHAR(20),
        company (30),
        acc_type VARCHAR(20));";

    mysqli_query($conn, $sqlTableCheck);

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $company = $_POST['company'];
    //$acc_type = $_POST['acc_type'];

    $insert = "INSERT INTO customers(fName, lName, email, pwd, company)
            VALUES('$fName', '$lName', '$email', '$pwd', '$company');";

    mysqli_query($conn, $insert);
    echo "<p>Status has been Posted :)</p>";



    ?>

</body>

</html>