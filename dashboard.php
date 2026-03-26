<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: /login-session/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Dashboard</h2>
    <p>Login sebagai:  <b><?php echo $_SESSION['username'];  ?></b></p>

    <a href="logout.php">Logout</a>
</div>

</body>
</html>