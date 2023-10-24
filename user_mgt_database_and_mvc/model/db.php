<?php

$db_host = 'localhost';
$db_name = 'webtech';
$db_username = 'root';
$db_pass = '';


function db_connection(){

    global $db_host;
    global $db_name;
    global $db_username;
    global $db_pass;


    $connection = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

    return $connection;
}


?>