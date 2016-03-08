<?php
require_once('connect.php');
function retireOrder($conn) {
    $token = getToken();
    $sql = 'UPDATE users u LEFT JOIN orders o ON u.id = o.users_id AND o.status = "new" SET o.status = "old" WHERE u.token = ?';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array($token))) {
    }
}
function createNewOrder($conn) {
    $token = getToken();
    $sql = 'INSERT INTO orders (users_id, status) (SELECT u.id, "new" FROM users u WHERE u.token = ?)';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array($token))) {
    }
}
function checkout($conn) {
    retireOrder($conn);
    createNewOrder($conn);
    echo 'Checkout Successful';
}
function getToken() {
    if (isset($_COOKIE['token'])) {
        return $_COOKIE['token'];
    }
    else {
        header('location:/SimpleCart/login/');
    }
}
?>

<!DOCTYPE html>
<head>
    <title>New York Apartments</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css"/>
</head>

<body id="Checkout">
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

<div class="checkoutContent">
<h2>Thank you for purchasing our product.</h2>
</div>

</body>