<?php
session_start();
    if(! isset($_SESSION['$counter'])){
        $_SESSION['$counter'] = 0;
    }

    $_SESSION['$counter'] +=1;
    echo $_SESSION['$counter'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>cookie test</h1>
</body>
</html>