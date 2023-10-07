
<?php
    if(isset($_REQUEST['submit'])){
        $degrees = $_REQUEST['degrees'];
        
        echo "Selected Degree:<br>";
        foreach($degrees as $degree){
            echo $degree."<br>";
        }
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
            <input type="checkbox" name="degrees[]" value="ssc" id=""><label>SSC</label>
            <input type="checkbox" name="degrees[]" value="hsc" id=""><label>HSC</label>
            <input type="checkbox" name="degrees[]" value="bsc" id=""><label>BSc</label>
            <input type="checkbox" name="degrees[]" value="msc" id=""><label>MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>