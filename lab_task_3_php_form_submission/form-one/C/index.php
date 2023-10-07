<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];

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
            <legend>Name</legend>
            <input type="text" name="name" value="<?php if(isset($name)){echo $name; }?>" id="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>