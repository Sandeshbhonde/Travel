<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required form fields are set
    if (isset($_POST['package'], $_POST['price'], $_POST['destination'], $_POST['date'], $_POST['number_of_people'])) {
        $package = $_POST['package'];
        $price = $_POST['price'];
        $destination = $_POST['destination'];
        $date = $_POST['date'];
        $number_of_people = $_POST['number_of_people'];

        // Process the booking, save to database, etc.
        echo "<h2>Booking Confirmed!</h2>";
        echo "<p>Package: $package</p>";
        echo "<p>Price: \$$price</p>";
        echo "<p>Destination: $destination</p>";
        echo "<p>Travel Date: $date</p>";
        echo "<p>Number of People: $number_of_people</p>";
    } else {
        echo "<h2>Error</h2>";
        echo "<p>Required booking details are missing. Please go back and fill out all the fields.</p>";
        echo "<a href='packages.php'>Go back to Packages</a>";
    }
} else {
    echo "<h2>Error</h2>";
    echo "<p>No package selected. Please go back and select a package to book.</p>";
    echo "<a href='packages.php'>Go back to Packages</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book a Trip</title>
    <style>
        /* Comprehensive CSS including footer styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #e3f2fd, #bbdefb);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            margin: auto;
            flex: 1;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #2196f3;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #2196f3;
            border-radius: 10px;
            font-size: 16px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            border-color: #64b5f6;
            outline: none;
            box-shadow: 0 0 5px rgba(33, 150, 243, 0.5);
        }

        input[type="submit"] {
            background: #2196f3;
            color: #fff;
            border: 2px solid #1976d2;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s, border-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background: #1976d2;
            transform: translateY(-2px);
            border-color: #1e88e5;
        }

        p {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        a {
            color: #2196f3;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            text-decoration: underline;
            color: #1976d2;
        }

        .box {
            border: 2px solid #e0e0e0;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #2196f3;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book a Trip</h2>
        <div class="box">
            <form method="POST">
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
                
                <label for="date">Travel Date:</label>
                <input type="date" id="date" name="date" required>
                
                <label for="number_of_people">Number of People:</label>
                <input type="number" id="number_of_people" name="number_of_people" required>

                <!-- Package and Price hidden inputs -->
                <input type="hidden" name="package" value="<?php echo isset($_GET['package']) ? $_GET['package'] : ''; ?>">
                <input type="hidden" name="price" value="<?php echo isset($_GET['price']) ? $_GET['price'] : ''; ?>">

                <input type="submit" value="Book Now">
            </form>
        </div>
        <p>Want to explore packages? <a href="packages.php">View Packages.</a></p>
    </div>
    <footer>
        © 2024 Travel Management System. All rights reserved.
    </footer>
</body>
</html>
