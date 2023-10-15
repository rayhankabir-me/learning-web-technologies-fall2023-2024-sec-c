<?php


 include_once('controller/functions.php');



 if(isset($_REQUEST['submit'])){

    $error_message = '';

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    

    if(isset($_REQUEST['remember_me'])){
        $remember_me = $_REQUEST['remember_me'];
    }else{
        $remember_me = '';
    }


    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";


    }elseif (username_validation($username) === false) {
        $error_message .= 'Invalid username Format!';
    }
    
    if($password == ''){
        $error_message .= "Your must fill Password! <br>";


    }elseif (password_validation($password) === false) {
        $error_message .= "Invalid Password Format!";
    }






    
    



    


    

    
 }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


                <form action="#" method="post">

                    <fieldset>
                        <legend>Login</legend>
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
                    </fieldset>

                    


                </form>
    
</body>
</html>