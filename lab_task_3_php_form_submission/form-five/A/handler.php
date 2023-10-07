
<?php
    if(isset($_REQUEST['submit'])){
        $degrees = $_REQUEST['degrees'];

        foreach($degrees as $degree){
            echo $degree."<br>";
        }
    }
?>



