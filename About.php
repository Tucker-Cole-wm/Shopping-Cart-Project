/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/2/16
 * Time: 5:20 PM
 */
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
    <title>New York Apartments</title>
</head>
<body background="http://www.brandbox.io/wp-content/uploads/2015/07/New-York-1.jpg">
<h1>About Us</h1>
    <p>New York Apartments is a dedicated team of individuals that only finds the most high-end apartments for sale.
       We specialize in many professions, as is needed to bring the best in all aspects relevant to apartments.</p>
<h2>Mission</h2>
    <p>Our mission is to bring the most top quality apartments available in the New York City area.
       We are here to serve the people that use our site in any way possible to cater to their needs of apartments. </p>
<h2>Origin</h2>
    <p>On a busy night in NYC, three friends in their apartments were brainstorming on ideas for a start up that they could begin.
       After more than a few tasked hours, they settled on the apartment market.
       Being owners themselves, they thought, why not just use what they know in the market to others advantage?
       They then got to work on the framework of the business today, New York Apartments.</p>
</body>
