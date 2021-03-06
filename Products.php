<?php
require_once('connect.php');

function getProducts($conn) {
    $sql = 'SELECT * FROM products ORDER BY name';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        $products = '<tr>';
        $counter = 0;
        while ($row = $stmt->fetch()) {
            if ($counter == 3) {
                $counter = 0;
                $products .= '<tr>';
            }
            $products .= '
            <td><img src="'.$row['image'].'" height="300px" width="300px">
                <p>'.$row['name'].'</p>
                <p>'.$row['description'].'</p>
                <p>'.$row['address'].'</p>
                <p>$'.$row['price'].'</p>
                <form method="post" action="shoppingCart.php">
                <input type="hidden" name="id" value="'.$row['id'].'"/>
                <input type="submit" name="add" value="ADD"/>
                </form></td>
        ';
            $counter++;
            if ($counter == 3) {
                $products .= '</tr>';
            }
        }
        echo $products;
    }
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
        <li><a href="login.php">Login</a></li>
        <li class="copyright"> © New York Apartments</li>
    </ul>
</div>

<h1>Products</h1>
<div class="content">
<div class="productContent">
    <div class="productTable">
    <table border="1px">
        <?php
        getProducts($dbh);
        ?>
    </table>
    </div>
</div>
</div>
</body>
</html>x