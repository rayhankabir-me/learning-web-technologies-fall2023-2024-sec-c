<?php
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    echo "Email: ".$email;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Two - B</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Email</legend>
            <input type="email" name="email" id="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>