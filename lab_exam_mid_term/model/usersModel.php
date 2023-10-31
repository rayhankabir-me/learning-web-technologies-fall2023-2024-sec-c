<?php
require_once('db.php');

function get_user_data($user_id){

    $conneciton = get_connection();
    $sql = "SELECT * FROM users WHERE user_id = '{$user_id}'";
    $result = mysqli_query($conneciton, $sql);
    return $result;

}
function userLogin($user_id, $password){

    $conneciton = get_connection();
    
    $sql = "SELECT * FROM users WHERE user_id = '{$user_id}' AND password = '{$password}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}
function get_user_type($user_id){

    $conneciton = get_connection();
    $sql = "SELECT user_type FROM users WHERE user_id = '{$user_id}'";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}

function get_all_users(){

    $conneciton = get_connection();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conneciton, $sql);
    return $result;

}

function get_user($user_id){
    $conneciton = get_connection();
    $sql = "SELECT name FROM users WHERE user_id = '{$user_id}'";
    $result = mysqli_query($conneciton, $sql);
    return $result;

}

function create_user($user_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO users (user_id, password, name, user_type)
    VALUES ('{$user_data['user_id']}', '{$user_data['password']}', '{$user_data['name']}', '{$user_data['user_type']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}

function update_user($id){


}

function delete_user($id){


}

//check whether user id already exists
function user_id_exists($user_id){

    $conneciton = get_connection();
    $sql = "SELECT user_id FROM users WHERE user_id = '{$user_id}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }

}

?>