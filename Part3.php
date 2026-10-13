<?php
$servername = "localhost";
$username = "root";
$password = "Pass4!";
$dbname = "tennisclub";

date_default_timezone_set('Europe/Dublin');

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO member (firstname, surname) VALUES ('john', 'doe')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>