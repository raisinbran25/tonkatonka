<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve all user inputs from database
$sql = "SELECT * FROM user_inputs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output each user input as HTML
  while($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<p><strong>Username:</strong> " . $row["username"] . "</p>";
    echo "<p><strong>Input Text:</strong> " . $row["input_text"] . "</p>";
    echo "</div>";
  }
} else {
  echo "No user inputs found";
}

// Close database connection
$conn->close();
?>