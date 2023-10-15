<?php

$my_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_';





   function username_validation($user_name){

    $usernameValid = true;

    $my_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_';
 
    if (strlen($user_name) < 2) {
        $usernameValid = false;
    } else {
        for ($i = 0; $i < strlen($user_name); $i++) {
            if (strpos($allowedCharacters, $username[$i]) === false) {
                $usernameValid = false;
                
            }
        }
    }
 
    if (!$usernameValid) {
        $error_message = 'Invalid username Format';
    }

   }
?>

