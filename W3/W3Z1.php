<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>
<form action="W3Z1.php" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>

<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == 'admin' && $password == '123') {
        if (!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 0;
        }
        header('Location: W3Z2.php');
        exit;
    } else {
        echo 'Incorrect login or password. Please try again.';
    }
}

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}

setcookie('counter', $counter, time() + 3600);

echo 'Cookie counter: ' . $counter;
?>
</body>
</html>