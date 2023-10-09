<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    $email = $_COOKIE['email'];
    $gender = $_COOKIE['gender'];
    $date_of_birth = $_COOKIE['date_of_birth'];
    
}else{
    header('location: login.php');
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
                    <li><a href="edit_profile.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td  colspan="3">
            <td> 
                <br>
                <br>
                <fieldset>
                    <legend>Profile</legend>
                    Name: <?php echo $name; ?><br>
                    <hr>
                    Email: <?php echo $email; ?><br>
                    <hr> 
                    Gender: <?php echo $gender; ?><br>
                    <hr>
                    Date of Birth: <?php echo $date_of_birth; ?><br>
                    <hr>
                    Profile Picture: <br>
                    <img src="https://res.cloudinary.com/demo/image/gravatar/e3264cf16f34ecd3c7c564f5668cbc1e.jpg" alt="">
                    <hr>
                    <a href="edit_profile.php">Edit Profile</a>
                </fieldset>
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