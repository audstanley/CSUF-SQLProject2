<?php
// define variables and set to empty values
    $courseNumber = "";

    if (isset($_POST['submit'])) {
        $courseNumber = $_POST['courseNumber'];
        echo $courseNumber;
    }
    else {
        echo "incorrect form submission";
    }
    
?>