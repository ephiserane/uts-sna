<?php

$host = '172.17.0.2';
$dbname = 'ujiansna';
$username = 'root';
$password = 'abcdefgh';

$connect = mysqli_connect($host, $dbname, $username, $password)

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$res = mysqli_query($connect, $sql);
$total = count(mysqli_fetch_all($res));

echo "<h1>Total user: {$total}</h1>";

mysqli_close($connect);

?>