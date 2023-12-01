<?php
require_once('../model/usersModel.php');
require_once('../controller/functions.php');

$action = $_REQUEST['action'];

if($action == 'register_user'){

    $error_message = '';
    $success_message = '';
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $full_name = $_REQUEST['full_name'];
    $password = $_REQUEST['password'];
    $c_password = $_REQUEST['c_password'];
 
    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    }else{
        $gender = '';
    }
 
    $date_of_birth = $_REQUEST['date_of_birth'];
 
    if($full_name == ''){
        $error_message .= "Your must fill Full Name! <br>";
    }elseif (name_validation($full_name) === false) {
        $error_message .= "Invalid Name Format! <br>";
    }
    if($email == ''){
        $error_message .= "Your must fill Email! <br>";
    }elseif (email_validation($email) === false) {
        $error_message .= "Invalid Email Format! <br>";
    }
    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";
    }elseif (username_validation($username) === false) {
        $error_message .= "Invalid User Name Format! <br>";
    }elseif (user_name_exists($username) == true) {
     $error_message .= "This User Name Already Exists. Try Another! <br>";
    }
    if($password == ''){
        $error_message .= "Your must fill Password! <br>";
    }elseif (password_validation($password) === false) {
        $error_message .= "Wrong Password Format! <br>";
    }elseif ($c_password !== $password) {
        $error_message .= "Password Doesn't Match! <br>";
    }
    if($gender == ''){
        $error_message .= "Your must fill Gender! <br>";
    }
    if ($date_of_birth == '') {
        $error_message .= "You must fill Date of Birth! <br>";
    }
 
 
    //data array
    $submited_data = [
     'user_name' => $username,
     'full_name' => $full_name,
     'email' => $email,
     'gender' => $gender,
     'date_of_birth' => $date_of_birth,
     'password' => $password,
     'user_type' => 'Customer'
     ];
 
    if($error_message === ''){
 
     $result = create_user($submited_data);
     if($result){
         $error_message .= "Registration Success! <a href='login.php'>Login Now</a> <br>";
     }
     
    }

}