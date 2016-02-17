<?php
require_once('connect.php');
function login($conn) {
    setcookie('token', "", 0, "/");
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $sql = 'SELECT * FROM users WHERE email = ? AND password = ?';
    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array($email, $password))) {
        $valid = false;
        while ($row = $stmt->fetch()) {
            $valid = true;
            $token = generateToken();
            $sql = 'UPDATE users SET token = ? WHERE email = ?';
            $stmt1 = $conn->prepare($sql);
            if ($stmt1->execute(array($token, $email))) {
                setcookie('token', $token, 0, "/");
                echo 'Login Successful';
            }
        }
        if(!$valid) {
            echo 'Email or Password Incorrect';
        }
    }
}
function generateToken() {
    $date = date(DATE_RFC2822);
    $rand = rand();
    return sha1($date.$rand);
}
if(isset($_POST['login'])) {
    login($dbh);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css"/>
</head>

<body>

<div class="login">
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

<div id="login">
<h3>Login</h3>
<form method="post" action="">
    <input type="text" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" name="login" value="LOGIN"/>
</form>

<button type="button" href="register.php">Register Here</button>
</div>
</body>
</html>