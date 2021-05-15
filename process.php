<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'datalogin');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
// $username = mysqli_real_escape_string($_POST['username']);
// $password = mysqli_real_escape_string($_POST['password']);

// $result = mysqli_query("select * from userlogin where username = '$username' and password = '$password'"); die ("Failed to query database".mysqli_error());

?>
