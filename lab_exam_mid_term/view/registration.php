<?php
include_once('../controller/functions.php');
require_once('../model/usersModel.php');

if(isset($_REQUEST['submit'])){

   $error_message = '';
   $success_message = '';
   $user_id = $_REQUEST['user_id'];
   $name = $_REQUEST['name'];
   $password = $_REQUEST['password'];
   $c_password = $_REQUEST['c_password'];
   
	if(isset($_REQUEST['user_type'])){
		$user_type = $_REQUEST['user_type'];
	}else{
		$user_type = '';
	}





   if($name == ''){
       $error_message .= "Your must fill Name! <br>";
   }elseif (name_validation($name) === false) {
       $error_message .= "Invalid Name Format! <br>";
   }

   if($user_id == ''){
       $error_message .= "Your must fill User Id! <br>";
   }elseif (user_id_exists($user_id) == true) {
    $error_message .= "This User Id Already Exists. Try Another! <br>";
   }
   if($password == ''){
       $error_message .= "Your must fill Password! <br>";
   }elseif (password_validation($password) === false) {
       $error_message .= "Wrong Password Format! <br>";
   }elseif ($c_password !== $password) {
       $error_message .= "Password Doesn't Match! <br>";
   }
   if($user_type == ''){
       $error_message .= "Your must fill User Type! <br>";
   }



   //data array
   $submited_data = [
    'user_id' => $user_id,
    'name' => $name,
    'password' => $password,
    'user_type' => $user_type,
    ];

   if($error_message === ''){

    $result = create_user($submited_data);
    if($result){
        $error_message .= "Registration Success! <a href='login.php'>Login Now</a> <br>";
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
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="user_id"><br/>
					Password<br/><input type="password" name="password"><br/>
					Confirm Password<br/><input type="password" name="c_password"><br/>
					Name<br/><input type="text" name="name"><br/>
					User Type<hr/>
					<input type="radio" name="user_type" value="user" />User
					<input type="radio" name="user_type" value="admin" />Admin
					<hr/>
					<p><?php if(isset($error_message)){echo $error_message;} ?></p>
                	<p><?php if(isset($success_message)){echo $success_message;} ?></p>
					<input type="submit" value="Sign Up" name="submit">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
		