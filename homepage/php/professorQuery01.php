<?php
// define variables and set to empty values
    $ssn = "";

    if (isset($_POST['submit'])) {
        $ssn = $_POST['ssn'];
        echo $ssn;
    }
    else {
        echo "incorrect form submission";
    }
    
?>