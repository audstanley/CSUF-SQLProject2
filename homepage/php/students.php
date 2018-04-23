<div class="container">
  <div class="bg-lg-2">
    <div class="bg-col">
        <h2> Students:</h2>
        <table style="width: 100%">
            <tr>
                <td>First Name:</td>
                <td>Last Name:</td>
                <td>Street:</td>
                <td>City:</td>
                <td>Zip:</td>
                <td>Phone:</td>
                <td>Major:</td>
            </tr>

            <?php
                $mysqli = new mysqli("localhost", "cs332s43", "cootieng", "cs332s43");
                $result = $mysqli->query("SELECT * FROM student LEFT JOIN department ON student.major = department.d_number");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $row["s_phone"]);
                        echo "<tr>";
                        echo "<td>" . $row["fname"]   . "</td>";
                        echo "<td>" . $row["lname"]   . "</td>";
                        echo "<td>" . $row["street"]  . "</td>";
                        echo "<td>" . $row["city"]    . "</td>";
                        echo "<td>" . $row["zip"]     . "</td>";
                        echo "<td>" . $number         . "</td>";
                        echo "<td>" . $row["d_name"]  . "</td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "No students in the database";
                }
                
                // here we can check if the data is post data.
                if (isset($_POST['fromPerson']) ) {
                    $fromPerson = '+from%3A'.$_POST['fromPerson'];
                    echo $fromPerson;
                }
            ?>
            
        </table>
    </div>
</div>