<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Management System</title>
    <style>
        /* Internal CSS for a professional look */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #e3f2fd, #bbdefb);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Full height */
        }

        header {
            background-color: #2196f3;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Light hover effect */
        }

        main {
            flex: 1; /* Allows main to grow */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Center content vertically */
            text-align: center;
            padding: 40px;
        }

        h2 {
            font-size: 2.5em;
            color: #2196f3;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            color: #333;
        }

        footer {
            background-color: #2196f3;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Travel Management System</h1>
        <nav>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="packages.php">View Packages</a>
        </nav>
    </header>
    <main>
        <h2>Explore the World with Us!</h2>
        <p>Your adventure begins here. Check out our packages!</p>
    </main>
    <footer>
        <p>&copy; 2024 Travel Management System</p>
    </footer>
</body>
</html>
