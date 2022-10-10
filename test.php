<?php
$servername = "localhost:3306";
$username = "root";
$password = "password";
$database = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<font color=red>id:</font> " . $row["course_id"]. " - Name: " . $row["course_descrion"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>