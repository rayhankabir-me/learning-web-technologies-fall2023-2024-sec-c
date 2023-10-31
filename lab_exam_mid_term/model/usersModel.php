<?php
require_once('db.php');


function get_all_users(){


}

function get_user($id){


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