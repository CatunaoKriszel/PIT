<?php
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

// Check if ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch existing data
    $stmt = $conn->prepare("SELECT firstname, middlename, lastname, age, address, course, section FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($firstname, $middlename, $lastname, $age, $address, $course, $section);
    $stmt->fetch();
    $stmt->close();
} else {
    // Redirect or handle error if ID is not set
    header("Location: index.html"); // Redirect to the main page
    exit();
}

// Handle form submission for update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $section = $_POST['section'];

    // Update the record
    $stmt = $conn->prepare("UPDATE students SET firstname=?, middlename=?, lastname=?, age=?, address=?, course=?, section=? WHERE id=?");
    $stmt->bind_param("ssiiissi", $firstname, $middlename, $lastname, $age, $address, $course, $section, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Update Student Information</h2>
    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" required>
        </div>

        <div class="mb-3">
            <label for="middlename" class="form-label">Middle Name:</label>
            <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $middlename; ?>">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="4

            <div class="mb-3">
                <label for="course" class="form-label">Course:</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section:</label>
                <input type="text" class="form-control" id="section" name="section" required>
            </div>