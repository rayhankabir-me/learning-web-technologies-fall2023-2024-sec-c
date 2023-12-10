<?php

require_once('../model/usersModel.php');
require_once('../controller/functions.php');

$action = $_REQUEST['action'];








//registering user
if($action == 'user_registration'){
    $error_message = '';
    
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $full_name = $_REQUEST['full_name'];
    $password = $_REQUEST['password'];
    $c_password = $_REQUEST['c_password'];
 
    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    }
 
    $date_of_birth = $_REQUEST['date_of_birth'];

 
    if($username == ''){
        $error_message .= "Your must fill User Name!";
    }elseif (username_validation($username) === false) {
        $error_message .= "Invalid User Name Format!";
    }elseif (user_name_exists($username) == true) {
     $error_message .= "This User Name Already Exists. Try Another!";
    }else if($full_name == ''){
        $error_message .= "Your must fill Full Name!";
    }else if($email == ''){
        $error_message .= "Your must fill Email!";
    }else if(email_validation($email) === false){
        $error_message .= "Invalid Email Format!";
    }else if($password == ''){
        $error_message .= "Your must fill Password!";
    }else if($c_password !== $password){
        $error_message .= "Passwords Doesn't Match!";
    }else if(password_validation($password) === false){
        $error_message .= "Wrong Password Format!";
    }else if($gender == ''){
        $error_message .= "Your must fill Gender!";
    }else if($date_of_birth == ''){
        $error_message .= "You must fill Date of Birth!";
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
     
        if($result === true){
            echo '<p id="success_message">registration successfully..<a class="medio-btn" href="../view/login.php">Login Now</a></p>';
        }elseif ($result === false) {
           echo '<p id="error_message">user registration failed... try again!</p>';
        }
         
        }else{
            echo "<p id='error_message'>".$error_message."</p>";
        }
 }

 if($action == 'user_login'){


        $error_message = '';
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
    
        if($email == ''){
            $error_message .= "Your must fill User Name! ";
    
        }else if($password == ''){
            $error_message .= "Your must fill Password! ";
        }


        if($error_message === ''){
    
            $login = user_login($username, $password);
            $user_data = get_user_type($username);
            $user_type = $user_data->fetch_assoc();
            if ($login == true){
                session_start();
                $_SESSION["user_login"] = $username;
    
                if (isset($_POST["remember_me"])) {
                    $cookie_name = "remember_user";
                    $cookie_value = $username;
                    $cookie_expire = time() + 30 * 24 * 60 * 60;
                    setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
                }
                echo 1;
    
            }else{
                    echo "<p id='error_message'>Invalid login details! Try Again!</p>";
                } 
        }else{
            echo $error_message;
        }
    
    
    
        
    
        
   
 }


?>