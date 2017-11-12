<?php

require 'database.php';

//$stmt = $pdo->query("INSERT INTO users (username, password,email)  VALUES ('testuser9', 'pass3455', 'test@gmail.com')");
//$stmt = $pdo->query("DELETE FROM users WHERE username='testuser9'");
//$stmt = $pdo->query("SELECT * FROM users where id=?");

// $stmt = $pdo->prepare("SELECT * FROM users where id=?");
// $stmt->execute([$_GET['id']]);
// $data = $stmt->fetchALL();
// print_r($data);

// $stmt = $pdo->prepare("SELECT * FROM users where id= :id");
// $stmt->execute(['id'=>2]);
// $data1 = $stmt->fetchALL();
// print_r($data1);

// $id=$_GET['id'];
// $stmt = $pdo->prepare("SELECT * FROM users where id= :id");
// //$stmt->bindValue(':id', $id);
// $stmt->bindParam(':id', $id);
// $id=23;
// $stmt->execute();
// $data2 = $stmt->fetchALL();
// print_r($data2);


$stmt = $pdo->prepare("SELECT count(*) FROM users");
$stmt->execute();
echo $stmt->fetchColumn();



?>