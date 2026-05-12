<?php
$host = getenv('MYSQLHOST')
$port = getenv('MYSQLPORT')
?: 'localhost';
?: '3306';
$db
$user = getenv('MYSQLUSER')
= getenv('MYSQLDATABASE') ?: 'railway';
?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: '';
$conn = new mysqli($host, $user, $pass, $db, (int)$port);
if ($conn->connect_error) {
  http_response_code(500);
die(json_encode(["ok" => false, "msg" => $conn->connect_error]));
  } $conn-
>set_charset("utf8mb4");
