<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/2/16
 * Time: 4:16 PM
 */

$servername = "localhost";
$username = "root";
$password = "root";

//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>
<body>
<h1>New York Venues</h1>
<ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="Contact.php">Contact</a></li>
    <li><a href="Products.php">Products</a></li>
    <li><a href="shoppingCart.php">Shopping Cart</a></li>
    <li><a href="Checkout.php">Checkout</a></li>
    <li><a href="F.A.Q..php">F.A.Q.</a></li>
    <li><a href="Account.php">Account</a></li>
</ul>

</body>
