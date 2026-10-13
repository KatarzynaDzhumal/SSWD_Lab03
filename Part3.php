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

$sql = "SELECT id, firstname, surname FROM member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["surname"] . ", ";
  }
} else {
  echo "0 results";
}

mysqli_query($conn, $sql);

mysqli_close($conn);
?>