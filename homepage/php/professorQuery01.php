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
                $ssn = "";
                if (isset($_POST['submit'])) {
                    $c = 0;
                    $ssn = $_POST['ssn'];
                    $mysqli = new mysqli("localhost", "cs332s43", "cootieng", "cs332s43");
                    $result = $mysqli->query("SELECT p_name,title,c_title,classroom,meeting_days FROM professor AS p INNER JOIN section AS s ON p.p_ssn = s.professor INNER JOIN course AS c ON s.c_num = c.c_number WHERE p.p_ssn = " . $ssn);
                    // SELECT p_name,title,c_title,classroom,meeting_days FROM professor AS p INNER JOIN section AS s ON p.p_ssn = s.professor INNER JOIN course AS c ON s.c_num = c.c_number WHERE p.p_ssn = 556760001;
                    if ($result->num_rows > 0) {
                        echo "<div class='container'><div class='bg-lg-2'>"; 
                        while($row = $result->fetch_assoc()) {
                            if($c == 0) {
                                echo "<td><h2>" . $row["title"] . " " . $row["p_name"]   . "</h2></td><br>";
                                echo "<table style='width: 100%'>";
                                echo "<td><strong> Title:        </strong></td>";
                                echo "<td><strong> Classroom:    </strong></td>";
                                echo "<td><strong> Meeting Days: </strong></td>";
                            }
                            echo "<tr>";
                            echo "<td>" . $row["c_title"]   . "</td>";
                            echo "<td>" . $row["classroom"]   . "</td>";
                            echo "<td>" . $row["meeting_days"]   . "</td>";
                            echo "</tr>";
                            $c++;
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