<?php
 if(isset($_REQUEST['submit'])){

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $c_password = $_REQUEST['c_password'];
    $gender = $_REQUEST['gender'];
    $date_of_birth = $_REQUEST['date_of_birth'];

    if($name == ''){
        $error_message .= "Your must fill Name! <br>";
    }
    if($email == ''){
        $error_message .= "Your must fill Email! <br>";
    }
    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";
    }
    if($password == ''){
        $error_message .= "Your must fill Password! <br>";
    }

    if($c_password == '' || $c_password !== $password){
        $error_message .= "Your passsword doesn't Match! <br>";
    }
    if($gender == ''){
        $error_message .= "Your must fill Gender! <br>";
    }
    if ($date_of_birth == '') {
        $error_message .= "You must fill Date of Birth! <br>";
    }


    if ($name !== '' && $email !== '' && $username !== '' && $password !== '' && $c_password !== '' && $c_password == $password && $gender !== '' && $date_of_birth !== '') {
        // echo $name . "<br>";
        // echo $email . "<br>";
        // echo $username . "<br>";
        // echo $password . "<br>";
        // echo $c_password . "<br>";
        // echo $gender . "<br>";
        // echo $date_of_birth . "<br>";

        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
        setcookie('c_password', $c_password, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('date_of_birth', $date_of_birth, time() + (86400 * 30), "/");

        header('location: login.php');
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
            <td><a href="index.php"><h2>X Company</h2></a></td>
            <td align="right"><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></td>
        </tr>
        <tr>
            <td colspan="3">
                <br>
                <br>
                <br>
                <form action="#" method="post">
                    <label for="">Name: </label><input type="text" name="name" id="">
                    <hr>
                    <label for="">Email: </label><input type="email" name="email" id="">
                    <hr>
                    <label for="">User Name: </label><input type="text" name="username" id="">
                    <hr>
                    <label for="">Password: </label><input type="password" name="password" id="">
                    <hr>
                    <label for="">Confirm Password: </label><input type="password" name="c_password" id="">
                    <hr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="male" id=""><label for=""> Male</label>
                        <input type="radio" name="gender" value="female" id=""><label for=""> Female</label>
                        <input type="radio" name="gender" value="other" id=""><label for=""> Other</label>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="date_of_birth" id="">
                    </fieldset>

                    <p><?php if(isset($error_message)){echo $error_message;} ?></p>

                    <br>
                    <input type="submit" value="Submit" name="submit">
                    <input type="submit" value="Reset" name="reset">
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