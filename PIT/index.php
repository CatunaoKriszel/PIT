<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My First Ubuntu Server PHP Deployment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }


        /* Add some basic styles for the navigation */
        nav {
            background-color: #4CAF50; /* Green background */
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none; /* Remove bullet points */
            padding: 0;
        }

        nav ul li {
            display: inline; /* Display list items in a row */
            margin: 0 15px; /* Space between items */
        }

        nav ul li a {
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            font-weight: bold; /* Bold text */
        }

        nav ul li a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>

 <nav>
        <ul>
            <li><a href="index.html">View Students Record</a></li>
    
        </ul>
    </nav>
    <div class="form-container">
        <h2 class="text-center">Student Information Form</h2>
        <form action="submit.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" id="middlename" name="middlename">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course:</label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section:</label>
                <input type="text" class="form-control" id="section" name="section" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>