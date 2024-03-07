<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=restaurant", $username, $password);
    // set the PDO error mode to exception
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$stmt = $conn->prepare("SELECT username, password FROM users");
$stmt->execute();

$results = $stmt->fetchALL();

?>

<html>
<head>

</head>
<body>

<?php
foreach ($results as $row){
'<h1>'. $row ["username"]. '</h1>';
'<h3>'. $row ["password"]. '</h3>';
}
?>
<h1>Register</h1>
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="please fill in username">
    <input type="password" name="password" placeholder="please fill in username">
    <input type="submit" value="Register">
</form>
    <h1>Log In</h1>
    <form action="login.php" method="GET">
        <input type="text" name="username" placeholder="please fill in username">
        <input type="password" name="password" placeholder="please fill in username">
        <input type="submit" value="Log In">


</form>

</body>

<footer>

</footer>
</html>