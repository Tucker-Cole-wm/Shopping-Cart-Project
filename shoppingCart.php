<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/2/16
 * Time: 5:21 PM
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

<body>
<h1>Shopping Cart</h1>

</body>
