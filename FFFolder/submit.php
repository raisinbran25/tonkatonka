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

// Get user inputs from form
$username = $_POST['username'];
$input_text = $_POST['input-text'];

// Insert user inputs into database
$sql = "INSERT INTO user_inputs (username, input_text)
        VALUES ('$username', '$input_text')";

if ($conn->query($sql) === TRUE) {
  echo "User input saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>