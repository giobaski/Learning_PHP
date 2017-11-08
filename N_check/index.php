<?php
session_start();
    //session_unset();

    if (!isset($_SESSION['country'])){
    $_SESSION['country'][]=array();
    $_SESSION['limit']=5;
    $_SESSION['count']=0;
    
}
$count = $_SESSION['count'];
if(isset($_POST['country'])){
    
    echo $_SESSION['count'];

    $limit = $_SESSION['limit'];
    
    if($_SESSION['count']<$limit){
        array_push($_SESSION['country'][$count], $_POST['country']);        
        $_SESSION['count'] += 1;
    } else {
        $_SESSION['count'] = 0;
        array_push($_SESSION['country'][$count], $_POST['country']);        
        $_SESSION['count'] += 1;
    }
    


}

var_dump($_SESSION['country']);
    
    
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
    <form action="" method="POST">
    <input type="text" name="country" value="">
    <input type="submit" value="submit">
    </form>

    <p>
    შექმენით HTML ფორმა, რომელიც მხოლოდ ერთი ველისგან შედგება და დაწერეთ პროგრამა, 
    რომელიც სესიაში შეინახავს ამ ველში ჩაწერილ ბოლო n მნიშვნელობას. მნიშვნელობების შენახვა უნდა მოხდეს მასივში. 
    თუ ფორმა n-ზე მეტჯერ გაიგზავნება მასივიდან ყველაზე ძველი ელემენტი უნდა წაიშალოს.
    </p>

</body>
</html>