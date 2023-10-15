<?php


   //user name validation function

   function username_validation($user_name){

    $usernameValid = true;

    $my_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_';
 
    if (strlen($user_name) < 2) {
        $usernameValid = false;
    } else {
        for ($i = 0; $i < strlen($user_name); $i++) {
            if (strpos($my_characters, $user_name[$i]) === false) {
                $usernameValid = false;
                
            }
        }
    }
 
    if (!$usernameValid) {
        return false;
    }

   }

   //password validation function
   function password_validation($password){

    $validPassword = true;

    if (strlen($password) < 8) {
        $validPasswordl = false;
    }

    $checkCharacter = false;
    $passworCharacter = ['@', '#', '$', '%'];

    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $passworCharacter)) {
            $checkCharacter = true;

        }
    }

    if (!$checkCharacter) {
        return false;
    }

   }
?>

