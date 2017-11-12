<?php
$db = 'geolab';
$host = 'localhost';
$dsn = "mysql:dbname=$db;host=$host;charset=utf8";
$username = 'root';
$password = '';
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $username, $password, $opt);