<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta http-wquiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
    <?php
    echo "Register Process PHP<br>";

    $dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS testtree2 (
        f_name varchar(30), 
        l_name varchar(30), 
        user_email varchar(30), 
        user_pwd varchar(30), 
        user_company varchar(30));";

    mysqli_query($conn, $sqlCreateTable);

    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $company = $_POST['company'];

    echo $fname.$lname.$email.$pass.$company;
    

    $sqlPostDB = "INSERT INTO testtree2 (f_name, l_name, user_email, user_pwd, user_company)
                    VALUES('testNumberTwo', 'yee', 'eee', 'YUU@', '****');";
    
    mysqli_query($conn, $sqlPostDB);

    echo "change 2.0";
    echo $_POST['fName'];
    
    
    ?>

</body>

</html>