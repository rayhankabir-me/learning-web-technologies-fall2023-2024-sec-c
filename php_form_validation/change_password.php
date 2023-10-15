<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){
    $cookie_name = $_COOKIE['name'];
    $cookie_password = $_COOKIE['password'];
    
}else{
    header('location: login.php');
}


if(isset($_REQUEST['submit'])){

    $error_message = '';

    $current_password = $_REQUEST['current_password'];
    $new_password = $_REQUEST['new_password'];
    $retype_password = $_REQUEST['retype_password'];

    if($current_password == ''){
        $error_message .= "Your must enter Current Password! <br>";
    }
    if($new_password == ''){
        $error_message .= "Your must fill New Password! <br>";
    }
    if($retype_password == ''){
        $error_message .= "Your must fill Retype Password! <br>";
    }


    if ($current_password !== '' && $new_password !== '' && $retype_password !== '' && $current_password == $cookie_password) {

        setcookie('password', $new_password, time() + (86400 * 30), "/");

        header("location: logout.php");
    }else{
        echo "Wrong Current Password!";
    }
    

    
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>


                <fieldset>
                    <legend>Change Password</legend>

                    <form action="#" method="post">
                    <label for="">Current Password: </label><input type="password" name="current_password" id="">
                    <hr>
                    <label for="">New Password: </label><input type="password" name="new_password" id="">
                    <hr>
                    <label for="">Retype Password: </label><input type="password" name="retype_password" id="">
                    <hr>
                    <input type="submit" value="Submit" name="submit">
                    <br>
                    <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                </form>

                </fieldset>

    
</body>
</html>