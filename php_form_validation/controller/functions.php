<?php



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
?>

