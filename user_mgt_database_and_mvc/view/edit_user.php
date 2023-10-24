<?php
    require_once('../model/userModel.php');
    $user_id = $_GET['id'];

    $data = getUser($user_id);
    $user_data = mysqli_fetch_assoc($data);
    
    //collecting submission data

    if(isset($_REQUEST['submit'])){

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
    
        if(isset($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'];
        }else{
            $gender = '';
        }
    
        $date_of_birth = $_REQUEST['date_of_birth'];

        $submited_data = [
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'gender' => $gender,
            'date_of_birth' => $date_of_birth
        ];

        $update = updateUser($user_id, $submited_data);
        if($update == true){
            echo "Data Update Success!"."<a href='profile.php'>Go to Profile</a>";
        }else{
            echo "Data Update Failed!";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
                <h2>Update User</h2>

                <form action="#" method="post">
                    <label for="">Name: </label><input type="text" name="name" id="" value="<?php echo $user_data['name']; ?>">
                    <hr>
                    <label for="">Email: </label><input type="email" name="email" id="" value="<?php echo $user_data['email']; ?>">
                    <hr>
                    <label for="">User Name: </label><input type="text" name="username" id="" value="<?php echo $user_data['username']; ?>">
                    <hr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="male" id="" <?php if($user_data['gender']=="male"){echo "checked";}?> ><label for=""> Male</label>
                        <input type="radio" name="gender" value="female" id="" <?php if($user_data['gender']=="female"){echo "checked";}?> ><label for=""> Female</label>
                        <input type="radio" name="gender" value="other" id="" <?php if($user_data['gender']=="other"){echo "checked";}?> ><label for=""> Other</label>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="date_of_birth" id="" value="<?php echo $user_data['date_of_birth']; ?>">
                    </fieldset>

                    <p><?php if(isset($error_message)){echo $error_message;} ?></p>

                    <br>
                    <input type="submit" value="Submit" name="submit">
                    <input type="submit" value="Reset" name="reset">
                </form>

    
</body>
</html>