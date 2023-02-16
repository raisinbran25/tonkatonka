delete.php:
```php
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
$delete_username = $_POST['delete-username'];

// Delete input from database
$sql = "DELETE FROM user_inputs WHERE username = '$delete_username'";

if ($conn->query($sql) === TRUE) {
  echo "User input deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>