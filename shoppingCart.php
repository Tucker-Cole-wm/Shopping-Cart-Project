<?php
require_once('connect.php');
function addProduct($conn, $id) {
    $token = getToken();
    $sql = 'INSERT INTO orders_products (orders_id, products_id) (SELECT o.id, ? FROM users u LEFT JOIN orders o ON u.id = o.users_id AND o.status = "new" WHERE u.token = ?)';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array($id, $token))) {
    }
}
function deleteProduct($conn, $id) {
    $token = getToken();
    $sql = 'DELETE op FROM users u LEFT JOIN orders o ON u.id = o.users_id AND o.status = "new" LEFT JOIN orders_products op ON o.id = op.orders_id WHERE u.token = ? AND op.id = ?';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array($token, $id))) {
    }
}

function getToken() {
    if (isset($_COOKIE['token'])) {
        return $_COOKIE['token'];
    }
    else {
        header('location:login.php');
    }
}
echo 'hello world';
if(isset($_POST['add'])) {
    $id = $_POST['id'];
    echo '<h1 style="color: white;">'.$id.'</h1>';
    addProduct($dbh, $id);
}
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    deleteProduct($dbh, $id);
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
