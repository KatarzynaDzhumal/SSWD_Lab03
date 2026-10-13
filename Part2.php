<?php
$servername = "localhost";
$username = "root";
$password = "Pass4!";
$dbname = "tennisclub";

date_default_timezone_set('Europe/Dublin');

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];

$sql = "INSERT INTO member (firstname, surname) VALUES ('$firstname', '$surname')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>