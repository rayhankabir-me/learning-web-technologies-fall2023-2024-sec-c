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

    function updateUser($id){


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