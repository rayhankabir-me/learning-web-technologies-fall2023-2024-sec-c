<?php
require_once('db.php');

//add course
function add_course($data){
    $conneciton = get_connection();
    $sql = "INSERT INTO courses (title, description, category)
    VALUES ('{$data['title']}', '{$data['description']}', '{$data['category']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}

//get all post data
function get_all_post_data(){
    $conneciton = get_connection();
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($conneciton, $sql);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }

    return $data;

}


//get single course data by id
function get_course_data($id){
    $conneciton = get_connection();
    $sql = "select * from courses where id = {$id}";;
    $result = mysqli_query($conneciton, $sql);
    $data = $result->fetch_assoc();
    return $data;
}


//update course
function update_course($id, $data){
    $conneciton = get_connection();
    $sql = "UPDATE courses SET tilte='{$data['image']}', title='{$data['title']}', description='{$data['description']}', category={$data['category']} WHERE id = $id";
    $result = mysqli_query($conneciton, $sql);
    if($result){
        return true;
    }else{
        return false;
    }

}


//delete course
function delete_course($id){
    $conneciton = get_connection();
    $sql = "DELETE FROM courses WHERE id={$id}";
    $result = mysqli_query($conneciton, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}







?>
