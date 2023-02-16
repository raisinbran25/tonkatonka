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
$edit_username = $_POST['edit-username'];
$edit_text = $_POST['edit-text'];

// Update user input in database
$sql = "UPDATE user_inputs SET input_text='$edit_text' WHERE username='$edit_username'";

if ($conn->query($sql) === TRUE) {
  echo "User input updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>

