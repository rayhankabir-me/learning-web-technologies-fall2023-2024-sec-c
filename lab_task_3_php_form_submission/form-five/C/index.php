<?php

$gender = '';
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Four - C</title>
</head>
<body>
<form action="#" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" id="" <?php if($gender === "male"){ echo "checked"; }?>><label> Male</label>
            <input type="radio" name="gender" value="female" id="" <?php if($gender === "female"){ echo "checked"; }?>><label> Female</label>
            <input type="radio" name="gender" value="other" id="" <?php if($gender === "other"){ echo "checked"; }?>><label> Other</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>