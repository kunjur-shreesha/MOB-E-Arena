<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "WebD";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user where Email='".$_SESSION['username']."'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['name_logged'] = $row["Name"];
    $_SESSION['phno_logged'] = $row["Phno"];
    $_SESSION['addr_logged'] = $row["Address"];
    $_SESSION['bdate_logged'] = $row["Bdate"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
