<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would normally save to a database
    // For demonstration, we're just displaying a success message
    echo "<script>alert('Registration successful for $username!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            min-height: 100vh; /* Ensure body takes full height */
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
            margin: auto; /* Center the container */
            flex: 1; /* Allow it to grow and fill space */
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
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #2196f3;
            border-radius: 10px;
            font-size: 16px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
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
        <h2>Register</h2>
        <div class="box">
            <form method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Register">
            </form>
        </div>
        <p>Already have an account? <a href="login.php">Login here.</a></p>
    </div>
    <footer>
        © 2024 Travel Management System. All rights reserved.
    </footer>
</body>
</html>
