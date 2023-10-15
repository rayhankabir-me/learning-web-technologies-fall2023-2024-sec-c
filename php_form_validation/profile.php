<?php
session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    header('location: profile.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Welcome to Your Profile</h2>
    <a href="change_password.php">Change Password</a>
</body>
</html>