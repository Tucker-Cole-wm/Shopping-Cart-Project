<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/2/16
 * Time: 5:20 PM
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
    <title>New York Apartments</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>
<body id="contact">
<div class="aboutUl">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="shoppingCart.php">Shopping Cart</a></li>
        <li><a href="Checkout.php">Checkout</a></li>
        <li><a href="F.A.Q..php">F.A.Q.</a></li>
        <li><a href="Account.php">Account</a></li>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <li class="copyright"> © New York Apartments</li>
    </ul>
</div>
<h1>Contact</h1>
<div class="content">
    <div class="aboutContent">
        <table border="1px">
            <tr>
                <th colspan="2">General Team</th>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>Phone Number</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>Address</td>
            </tr>
            <tr>
                <td>Fax</td>
                <td>Fax</td>
            </tr>
        </table>
    </div>
</div>
</body>
