<?php

require_once('../model/usersModel.php');
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
}

$user_id = $_SESSION["user_id"];


$data = get_user_data($user_id);
$result = $data->fetch_assoc();

?>


<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?php echo $user_id; ?></tr>
		<tr><td>NAME</td><td><?php echo $result['name']; ?></td></tr>	
		<tr><td>USER TYPE</td><td><?php echo $result['user_type']; ?></td></tr>
		<tr><td colspan="2" align="right"><a href="home.php">Go Home</a></td></tr>
	</table>			
</center>