<?php
// define variables and set to empty values
    $studentId = "";

    if (isset($_POST['submit'])) {
        $studentId  = $_POST['studentId'];
        echo $studentId;
    }
    else {
        echo "incorrect form submission";
    }
    
?>