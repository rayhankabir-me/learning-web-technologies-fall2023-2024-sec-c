
<?php
    if(isset($_REQUEST['submit'])){
        $blood_group = $_REQUEST['blood_group'];

        echo "Selected Blood Group: ".$blood_group;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Six - B</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="blood_group" id="">
                <option value="A+">A+</option>
                <option value="O+">O+</option>
                <option value="AB">AB</option>
                <option value="B+">B+</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>