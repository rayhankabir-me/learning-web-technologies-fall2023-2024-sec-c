<?php

require_once('../model/usersModel.php');
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
}

$user_id = $_SESSION["user_id"];


$name = get_user($user_id);
$result = $name->fetch_assoc();

?>



<center>
	<h1>Welcome <?php echo $result['name']; ?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="../controller/logout.php">Logout</a>
</center>