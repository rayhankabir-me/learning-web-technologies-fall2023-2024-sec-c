<?php 

    require_once('db.php');

    function userLogin($username, $password){

        $conneciton = db_connection();
        
        $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($conneciton, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getUsers(){
        $conneciton = db_connection();
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conneciton, $sql);
        return $result;
    }
    function getUser($id){
        $conneciton = db_connection();
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($conneciton, $sql);
        return $result;
    }

    function createUser(){

    }

    function updateUser($id, $submitted_data){
        $conneciton = db_connection();
        $sql = "UPDATE users SET name='{$submitted_data['name']}', username='{$submitted_data['username']}', email='{$submitted_data['email']}', gender='{$submitted_data['gender']}', date_of_birth='{$submitted_data['date_of_birth']}' WHERE id = $id";
        $result = mysqli_query($conneciton, $sql);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    function deleteUser($id){
    
        $conneciton = db_connection();
        $sql = "DELETE FROM users WHERE id={$id}";

        if (mysqli_query($conneciton, $sql)) {
            return true;
        } else {
            return false;
        }

    } 

?>