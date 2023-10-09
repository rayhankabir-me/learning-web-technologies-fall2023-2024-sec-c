<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $cookie_name = $_COOKIE['name'];
    $cookie_email = $_COOKIE['email'];
    $cookie_gender = $_COOKIE['gender'];
    $cookie_date_of_birth = $_COOKIE['date_of_birth'];
    
}else{
    header('location: login.php');
}


if(isset($_REQUEST['submit'])){

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $date_of_birth = $_REQUEST['date_of_birth'];

    if($name == ''){
        $error_message .= "Your must fill Name! <br>";
    }
    if($email == ''){
        $error_message .= "Your must fill Email! <br>";
    }
    if($gender == ''){
        $error_message .= "Your must fill Gender! <br>";
    }
    if ($date_of_birth == '') {
        $error_message .= "You must fill Date of Birth! <br>";
    }


    if ($name !== '' && $email !== '' && $gender !== '' && $date_of_birth !== '') {

        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('date_of_birth', $date_of_birth, time() + (86400 * 30), "/");

        header("location: edit_profile.php");
    }
    

    
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

    <table border="1" width="100%">
        <tr>
            <td>X Company</td>
            <td align="right">Logged in as <a href="profile.php"><?php echo $cookie_name; ?></a> | <a href="logout.php">Logout</a></td>
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
                <fieldset>
                    <legend>Edit Profile</legend>

                    <form action="#" method="post">
                    <label for="">Name: </label><input type="text" name="name" value="<?php echo $cookie_name; ?>" id="">
                    <hr>
                    <label for="">Email: </label><input type="email" name="email" value="<?php echo $cookie_email; ?>" id="">
                    <hr>
                    <label for="">Gender: </label>
                    <input type="radio" name="gender" value="male" id="" <?php if($cookie_gender === "male"){ echo "checked"; }?> ><label for=""> Male</label>
                    <input type="radio" name="gender" value="female" id="" <?php if($cookie_gender === "female"){ echo "checked"; }?> ><label for=""> Female</label>
                    <input type="radio" name="gender" value="other" id="" <?php if($cookie_gender === "other"){ echo "checked"; }?> ><label for=""> Other</label>
                    <hr>
                    <label for="">Date of Birth : </label>
                        <input type="date" name="date_of_birth" value="<?php echo $cookie_date_of_birth; ?>" id="">
                    <hr>
                    <input type="submit" value="Submit" name="submit">
                    <br>
                    <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                </form>

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