<?php
$servername = "localhost:3306";
$username = "root";
$password = "password";
$database = "bpa";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vehicle";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<font color=blue> Make:</font>" . $row["make"]. "<font color=red> Model:</font>" . $row["model"]. "<font color=Green> Price:</font>". $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>