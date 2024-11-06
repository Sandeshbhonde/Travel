<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Travel Packages</title>
</head>
<body>
    <h2>Available Travel Packages</h2>
    <ul>
        <li>
            <h3>Beach Holiday</h3>
            <p>Enjoy a relaxing beach holiday in Hawaii.</p>
            <form action="book.php" method="post">
                <input type="hidden" name="package" value="Beach Holiday">
                <input type="hidden" name="price" value="500.00"> <!-- Example price -->
                <button type="submit">Book Now</button>
            </form>
        </li>
        <li>
            <h3>Mountain Adventure</h3>
            <p>Experience the thrill of the mountains in the Alps.</p>
            <form action="book.php" method="post">
                <input type="hidden" name="package" value="Mountain Adventure">
                <input type="hidden" name="price" value="800.00"> <!-- Example price -->
                <button type="submit">Book Now</button>
            </form>
        </li>
        <li>
            <h3>City Tour</h3>
            <p>Explore the sights and sounds of New York City.</p>
            <form action="book.php" method="post">
                <input type="hidden" name="package" value="City Tour">
                <input type="hidden" name="price" value="300.00"> <!-- Example price -->
                <button type="submit">Book Now</button>
            </form>
        </li>
    </ul>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
