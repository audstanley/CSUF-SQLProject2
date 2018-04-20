<?php
// define variables and set to empty values
    $courseNumber = $sectionNumber = "";

    if (isset($_POST['submit'])) {
        #$ssn = test_input($_POST["ssn"]);
        $courseNumber  = $_POST['courseNumber'];
        $sectionNumber = $_POST['sectionNumber'];
        echo $courseNumber;
        echo $sectionNumber;
    }
    else {
        echo "incorrect form submission";
    }
    
?>