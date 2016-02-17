<?php
require_once('connect.php');
function register($conn) {
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $name_first = $_POST['name_first'];
    $name_last = $_POST['name_last'];
    $address = $_POST['address'];
    $realtor = $_POST['realtor'];
    $token = generateToken();
    $sql = 'INSERT INTO users (password, email, name_first, name_last, address, realtor, token) VALUES (?, ?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    try {
        if ($stmt->execute(array($password, $email, $name_first, $name_last, $address, $realtor, $token))) {
            setcookie('token', $token, 0, "/");
            $sql = 'INSERT INTO orders (users_id, status) (SELECT u.id, "new" FROM users u WHERE u.token = ?)';
            $stmt1 = $conn->prepare($sql);
            if ($stmt1->execute(array($token))) {
                echo 'Account Registered';
            }
        }
    }
    catch (PDOException $e) {
        echo 'Email already registered.';
    }
}
function generateToken() {
    $date = date(DATE_RFC2822);
    $rand = rand();
    return sha1($date.$rand);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
<?php
if(isset($_POST['register'])) {
    register($dbh);
}
?>
<form method="post" action="">
    <input type="text" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="text" name="name_first" value="First Name"/>
    <input type="text" name="name_last" value="Last Name"/>
    <input type="text" name="address" value="Address"/>
    <input type="text" name="realtor" value="Realtor"/>
    <input type="submit" name="register" value="Register"/>

</form>
</body>
</html>