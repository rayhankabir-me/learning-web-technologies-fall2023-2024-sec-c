<?php
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form One - B</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Email</legend>
            <input type="email" name="email" value="<?php if(isset($email)){echo $email; }?>" id="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>