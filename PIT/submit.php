<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "student_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set parameters from POST request
$firstname = $conn->real_escape_string($_POST['firstname']);
$middlename = $conn->real_escape_string($_POST['middlename']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$age = (int)$_POST['age']; // Cast to integer for safety
$address = $conn->real_escape_string($_POST['address']);
$course = $conn->real_escape_string($_POST['course']);
$section = $conn->real_escape_string($_POST['section']);

// Prepare the SQL statement
$sql = "INSERT INTO students (firstname, middlename, lastname, age, address, course, section) VALUES ('$firstname', '$middlename', '$lastname', $age, '$address', '$course', '$section')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connections
$conn->close();

// Redirect back to the HTML page
header("Location: index.php");
exit();
?>