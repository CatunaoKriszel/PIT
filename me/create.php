<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $course_section = $_POST['course_section'];

    $sql = "INSERT INTO students (firstname, middlename, lastname, age, address, course_section) 
            VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$course_section')";

    if ($conn->query($sql)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add Student</h1>
        <form action="" method="POST">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="middlename" placeholder="Middle Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="course_section" placeholder="Course/Section" required>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
