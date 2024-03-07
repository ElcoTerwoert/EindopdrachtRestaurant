<?php

include 'connection.php';
$user = $_POST['username'];
$pass = $_POST['password'];



$stmt = $conn->prepare(
    "SELECT  username, password FROM users WHERE username='$user'");
$stmt->execute();
$result = $stmt->fetch();



if(isset($result)){
    echo 'klopt';
}
else{
    echo 'klopt niet';
}
