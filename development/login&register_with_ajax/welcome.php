<?php
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    echo 'Welcome Guest.';
} else {
    echo 'Welcome ' . $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
    <a href="logout.php">logout</a>
</body>
</html>