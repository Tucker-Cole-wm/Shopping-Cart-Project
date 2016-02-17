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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New York Apartments</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>
<body id="FAQ">
<div class="aboutUl">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="shoppingCart.php">Shopping Cart</a></li>
        <li><a href="F.A.Q..php">F.A.Q.</a></li>
        <li><a href="login.php">Login</a></li>
        <li class="copyright"> © New York Apartments</li>
    </ul>
</div>
<h1>F.A.Q.</h1>
<div class="content">
    <div class="aboutContent">
        <h2>Why Apartments?</h2>
        <p>The reason we chose apartments is because there are so many available in a busy city like NYC.
            The market can be big and there are not a lot of businesses specifically tailored to the apartments in this area.</p>
        <br>
        <br>

        <h2>What is your pricing compared to realtors?</h2>
        <p>Our price compared to realtors is the same.  We take the prices straight off of the market.</p>
        <br>
        <br>

        <h2>Why should I use your site?</h2>
        <p>We believe just the exclusiveness of our site is a key factor to our success.
            We have mastered the target market in a way that no one currently has.
            This market is just so unique and new that us as a company see a big future with more apartments and customers.</p>
        <br>
        <br>

        <h2>I can not get an order to go through, how can I fix it?</h2>
        <p>Any technical issues are to be reported to our team at: newyorkapartmentssupport@gmail.com.</p>
        <br>
        <br>

        <h2>Do you give any other services?</h2>
        <p>Currently we do not give any other services but apartment selling.  We are looking to expand into other markets later on.</p>
    </div>
</div>
</body>
</html>