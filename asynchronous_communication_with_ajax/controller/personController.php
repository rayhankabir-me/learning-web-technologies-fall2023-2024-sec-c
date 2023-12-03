<?php
require_once('../model/personsModel.php');

$action = $_REQUEST['action'];

if($action == 'login'){
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $error_message = '';

    if($email == ''){
        $error_message .= 'please enter your email';
    }
    if($password == ''){
        $error_message .= 'please enter your password';
    }

    if($error_message == ''){
        $login = user_login($email, $password);

        if($login == true){

            session_start();
            $_SESSION["person_flag"] = $email;
            echo 'correct_details';
        }else if($login == false){
            echo 'incorrect login details..! dont have account? <a href="register.php" >Register Now</a>';
        }
    }else{
        echo $error_message;
    }
}

if($action == 'get_email'){

    $email = $_REQUEST['email'];
    
    $check_email = check_user_email($email);

    if($check_email == true){
        echo "this email address is already registered. try another..!";
    }else if($check_email == false){
        echo "this email address is valid to register...!";
    }
}

if($action == 'register'){
    $error_message = '';
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $phone = $_REQUEST['phone'];


    $check_email = check_user_email($email);

    if($check_email == true){
        $error_message .= 'this email address is already registered. try another..!';
    }

    if($error_message == ''){

        //collecting data
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password'  => $password
        ];
        $create_user = create_user($data);

        if($create_user == true){
            echo "registered successfully...<a href='login.php'>Login Now</a>";
        }else if($create_user == false){
            echo "registered failed, something wrong.. try again!";
        }
    }else{
        echo $error_message;
    }
}