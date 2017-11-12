<?php
include "database.php";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $stmt = $pdo->query("INSERT INTO users (username, password,email)  
                    VALUES ('$username', '$password', '$email')");


$stmt = $pdo->query('SELECT * FROM users ORDER BY id DESC');

while($row = $stmt->fetch()){
    echo "<ul>";
    echo "<li>" . $row['username'] . "</li>";
    echo "</ul>";
}


}

?>