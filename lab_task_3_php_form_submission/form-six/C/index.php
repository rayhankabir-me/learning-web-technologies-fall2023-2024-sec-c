
<?php
    $selected = '';
    if(isset($_REQUEST['submit'])){
        $blood_group = $_REQUEST['blood_group'];

        $selected = $blood_group;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Six - C</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="blood_group" id="">
                <option value="A+" <?php if($selected === 'A+'){echo 'selected';} ?> >A+</option>
                <option value="O+" <?php if($selected === 'O+'){echo 'selected';} ?> >O+</option>
                <option value="AB" <?php if($selected === 'AB'){echo 'selected';} ?> >AB</option>
                <option value="B+" <?php if($selected === 'B+'){echo 'selected';} ?> >B+</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>