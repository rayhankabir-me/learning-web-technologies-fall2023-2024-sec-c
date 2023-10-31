<?php

	require_once('../model/usersModel.php');

	if(isset($_REQUEST['submit'])){

	$error_message = '';
	$user_id = $_REQUEST['user_id'];
	$password = $_REQUEST['password'];

	if($user_id == ''){
		$error_message .= "Your must fill User Id! <br>";
	}
	if($password == ''){
		$error_message .= "Your must fill Password! <br>";
	}


	if($error_message == ''){

		$login = userLogin($user_id, $password);

		$user_type = get_user_type($user_id);
		$result = $user_type->fetch_assoc();


		if($login == true && $result['user_type'] == 'admin'){
			session_start();
			$_SESSION["username"] = $username;
			header("Location: admin_home.php");
		}elseif($login == true && $result['user_type'] == 'user'){
			session_start();
			$_SESSION["username"] = $username;
			header("Location: user_home.php");
		}
	}



	}



?>

<center>
<form action="#" method="post">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="user_id"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<p><?php if(isset($error_message)){echo $error_message;} ?></p>
					<input type="submit" value="Login" name="submit">
					<a href="registration.php">Register</a>


				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>