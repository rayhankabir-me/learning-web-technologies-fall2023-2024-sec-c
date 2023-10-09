<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    
}else{
    header('location: login.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <table border="1" width="100%">
        <tr>
            <td>X Company</td>
            <td align="right">Logged in as <a href="profile.php"><?php echo $name; ?></a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr>

            <td>
                <h3>Account</h3>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashoard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile Picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td  colspan="3">
            <td> 
                <br>
                <br>
                <h2> Welcome <?php echo $name; ?></h2>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td colspan="3">Copyright @2023</td>
        </tr>
    </table>
    
</body>
</html>