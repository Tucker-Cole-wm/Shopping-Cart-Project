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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New York Apartments</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>
<body id="products">
<div class="aboutUl">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="shoppingCart.php">Shopping Cart</a></li>
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

<h1>Products</h1>
<div class="content">
<div class="productContent">
    <div class="productTable">
    <table border="1px">
        <tr>
            <td><img src="http://www.idesignarch.com/wp-content/uploads/Remodelled-Rooftop-Apartment-New-York_3.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address:00001 Madison St.</p>
                <p>Price:$300,000</p></td>
            <td><img src="http://luxuryrentalsmanhattan.com/sites/default/files/uploads/OneMiMATower.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00002 Madison St.</p>
                <p>Price:$300,000</p></td>
            <td><img src="https://silversuitesresidences.com/wp-content/uploads/2013/02/2bdrm_a-1000x445.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00003 Madison St.</p>
                <p>Price:$300,000</p></td>
        </tr>
        <tr>
            <td><img src="http://www.ivettearango.com/wp-content/uploads/2011/10/Davis-Seating-Day-view.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00004 Madison St.</p>
                <p>Price:$300,000</p>
            </td>
            <td><img src="http://metroloftnyc.com/wp-content/uploads/2009/08/New-York-Apartments-11.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00005 Madison St.</p>
                <p>Price:$300,000</p>
            </td>
            <td><img src="http://cdn.home-designing.com/wp-content/uploads/2013/04/Clock-Tower-Apartment-neutral-sitting-area-with-views-to-New-York-City-and-statement-soft-furnishings.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00006 Madison St.</p>
                <p>Price:$300,000</p>
            </td>
        </tr>
        <tr>
            <td><img src="http://www.blogcdn.com/slideshows/images/slides/304/793/5/S3047935/slug/l/432pa-view-from-dining-room-looking-south-copyright-dbox-for-1.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00007 Madison St.</p>
                <p>Price:$300,000</p>
            </td>
            <td><img src="http://edc.h-cdn.co/assets/15/08/980x490/landscape_1424208961-unknown-9.jpeg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00008 Madison St.</p>
                <p>Price:$300,000</p>
            </td>
            <td><img src="http://cdn.myfancyhouse.com/wp-content/uploads/2013/11/Superb-Apartment-in-Soho-New-York-1.jpg" height="300px" width="300px">
                <p>Name:</p>
                <p>Description:</p>
                <p>Address: 00009 Madison St.</p>
                <p>Price:$300,000</p>
            </td>
        </tr>
    </table>
    </div>
</div>
</div>
</body>
</html>x