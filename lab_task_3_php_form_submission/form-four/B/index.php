<?php
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

    if($gender === "male"){
        echo "Gender: Male";
    }elseif($gender === "female"){
        echo "Gender: Female";
    }elseif($gender === "other"){
        echo "Gender: Other";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Four - B</title>
</head>
<body>
<form action="#" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" id=""><label> Male</label>
            <input type="radio" name="gender" value="female" id=""><label> Female</label>
            <input type="radio" name="gender" value="other" id=""><label> Other</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>