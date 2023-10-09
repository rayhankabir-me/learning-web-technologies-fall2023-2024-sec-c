<?php

    session_start();

    if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

        header('location: dashboard.php');
    }


 if(isset($_REQUEST['submit'])){

    $error_message = '';
    $login_failed = '';
    $invalid_login = '';

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $remember_me = $_REQUEST['remember_me'];


    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";
    }
    if($password == ''){
        $error_message .= "Your must fill Password! <br>";
    }


    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        
        $cookie_username = $_COOKIE['username'];
        $cookie_password = $_COOKIE['password'];

        if($username == $cookie_username && $password == $cookie_password){
            
            session_start();
            $_SESSION["user_login"] = "login_success";
            header('location: dashboard.php');

        }else{
            $invalid_login = "Invalid login details! Try Again!";
        }
    }else{
        $login_failed = "No User Exits. Please register!";
    }
    


    

    
 }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <table border="1" width="100%">
        <tr>
            <td>X Company</td>
            <td align="right"><a href="/">Home</a> | <a href="">Login</a> | <a href="registration.php">Registration</a></td>
        </tr>
        <tr>
            <td colspan="3">
                <br>
                <br>
                <br>
                <form action="#" method="post">

                    <fieldset>
                        <legend>Gender</legend>
                        <label for="">User Name: </label><input type="text" name="username" id="">
                        <hr>
                        <label for="">Password: </label><input type="password" name="password" id="">
                        <hr>
                        <input type="checkbox" name="remember_me" id=""><label for="">Remember Me </label>
                        <br>
                        <br>
                        <input type="submit" value="Submit" name="submit">
                        <a href="#">Forgor Password?</a>
                        <br>
                        <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                        <p><?php if(isset($invalid_login)){echo $invalid_login;} ?></p>
                        <p><?php if(isset($login_failed)){echo $login_failed;} ?></p>
                    </fieldset>

                    


                </form>
                <br>
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