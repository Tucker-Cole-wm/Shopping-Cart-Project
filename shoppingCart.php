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
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>

<body>
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
<h1>Shopping Cart</h1>

<div>
    <?php
    if(isset($_POST['checkout'])) {
        checkout($dbh);
    }
    ?>
</div>

</body>
