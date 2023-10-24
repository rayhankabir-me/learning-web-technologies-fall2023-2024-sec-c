<?php
    require_once('../model/userModel.php');
    $user_id = $_GET['id'];

    $delete = deleteUser($user_id);

    if($delete){
        header('location: profile.php');
    }else{
        echo "Delete Failed!";
    }

?>