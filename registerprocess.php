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

    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS testree (
        f_name varchar(30), 
        l_name varchar(30), 
        user_email varchar(30), 
        user_pwd varchar(30), 
        user_company varchar(30));";

    mysqli_query($conn, $sqlCreateTable);
    

    $sqlPostDB = "INSERT INTO testtree (f_name, l_name, user_email, user_pwd, user_company)
                    VALUES('jaitest', 'sdfdsfdsf', 'eee', 'yeet', 'YER');";
    
    mysqli_query($conn, $sqlPostDB);

    echo "change 1.9";
    echo $_POST['fName'];
    
    
    ?>

</body>

</html>