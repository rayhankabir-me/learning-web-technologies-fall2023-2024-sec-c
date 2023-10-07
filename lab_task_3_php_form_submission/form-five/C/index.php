
<?php

$degrees = [];


    if (isset($_REQUEST["degrees"])) {
        $degrees = $_REQUEST["degrees"];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Five - B</title>
</head>
<body>
    <form action="#" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degrees[]" value="ssc" id="" <?php if(in_array('ssc', $degrees)) {echo "checked";} ?> ><label>SSC</label>
            <input type="checkbox" name="degrees[]" value="hsc" id="" <?php if(in_array('hsc', $degrees)) {echo "checked";} ?> ><label>HSC</label>
            <input type="checkbox" name="degrees[]" value="bsc" id="" <?php if(in_array('bsc', $degrees)) {echo "checked";} ?> ><label>BSc</label>
            <input type="checkbox" name="degrees[]" value="msc" id="" <?php if(in_array('msc', $degrees)) {echo "checked";} ?> ><label>MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>