<?php
    require_once('../model/userModel.php');
    $user_id = $_GET['id'];

    $data = getUser($user_id);
    $user_data = mysqli_fetch_assoc($data);
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>


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

    
</body>
</html>