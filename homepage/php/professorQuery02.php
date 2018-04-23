<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>
		Database Project
	</title> 

	<body>
            <?php
            // define variables and set to empty values
                $courseNumber = "";
                $sectionNumber = "";
                if (isset($_POST['submit'])) {
                    $courseNumber = $_POST['courseNumber'];
                    $sectionNumber = $_POST['sectionNumber'];
                    $mysqli = new mysqli("localhost", "cs332s43", "cootieng", "cs332s43");
                    $result = $mysqli->query("SELECT grade,count(grade) FROM enrollment AS e INNER JOIN section AS s ON s.s_number = e.e_section AND s.s_number = " 
                        . $sectionNumber . " INNER JOIN course AS c ON c.c_number = s.c_num AND c.c_number = " 
                        . $courseNumber . " AND e.e_course = " 
                        . $courseNumber . " GROUP BY grade;");
                    // SELECT grade,count(grade),e_section,e_course from enrollment AS e INNER JOIN section AS s ON s.s_number = e.e_section AND s.s_number = 2 INNER JOIN course AS c ON c.c_number = s.c_num AND c.c_number = 335 AND e.e_course = 335 GROUP BY grade;
                    if ($result->num_rows > 0) {
                        echo "<div class='container'><div class='bg-lg-2'>";
                        echo "<td><h2>" . "Distinct Grades:" . "</h2></td><br>";
                        echo "<table style='width: 20%'>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><strong>" . $row["grade"]   . ":</strong></td>";
                            echo "<td>" . $row["count(grade)"]   . "</td>";
                            echo "</tr>";
                        }
                        echo '</table>';
                        echo "</div></div>";
                    }
                    else echo "<div class='container'><div class='bg-lg-2'><h4> No Results </h4></div><div>"; 
                    
                }
                else {
                    echo "incorrect form submission";
                }
                
            ?>
       
    </body>
</html>