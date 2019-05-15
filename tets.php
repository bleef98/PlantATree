<!DOCTYPE html>
<html>

<head>
    <title>Post Status Process</title>
    <meta http-wquiv="Content-Type" content="text/html; charset=utf-8" />
    
</head>

<body>

    <h1> hi </h1>

    <?php

    $dbServername = "remotemysql.com:3306";
    $dbUsername = "DCrftK3aaZ";
    $dbPassword = "sHp1bqQVIC";
    $dbName = "DCrftK3aaZ";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


    $sqlTableCheck = "CREATE TABLE IF NOT EXISTS statusTable(
        status_code VARCHAR(5),
        status_txt VARCHAR(70),
        share VARCHAR(15),
        date DATE,
        permission VARCHAR(50));";

mysqli_query($conn, $sqlTableCheck);

?>

</body>

</html>