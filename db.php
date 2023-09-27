<?php
// Database connection parameters
$dbhost = "localhost"; // Hostname where MySQL is running (usually 'localhost')
$dbuser = "root";      // MySQL username
$dbpass = "";          // MySQL password (empty in this case)
$dbname = "users";      // Name of the database you want to connect to

// Create a new MySQLi connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform your database operations, e.g., executing queries
$sql = "INSERT INTO your_table_name (column1, column2) VALUES ('value1', 'value2')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection when you're done
$conn->close();
?>
