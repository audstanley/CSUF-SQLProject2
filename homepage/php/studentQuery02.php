<?php
// define variables and set to empty values
    $studentId = "";

    if (isset($_POST['submit'])) {
        #$ssn = test_input($_POST["ssn"]);
        $studentId  = $_POST['studentId'];
        echo $studentId;
    }
    else {
        echo "incorrect form submission";
    }
    
?>