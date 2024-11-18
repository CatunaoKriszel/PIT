<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$students = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}
$conn->close();
?>