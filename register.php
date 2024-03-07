<?php

include 'connection.php';
$user = $_POST['username'];
$pass = $_POST['password'];


$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
$conn->exec($sql);