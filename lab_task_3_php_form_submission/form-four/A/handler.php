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


