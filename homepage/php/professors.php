<div class="container2">
  <div class="bg-lg-2">
    <div class="bg-col">
        <h2> Professors: </h2>
        <table style="width: 100%">
            <tr>
                <td>Ssn:</td>
                <td>Title:</td>
                <td>Name:</td>
                <td>Address:</td>
                <td>Phone:</td>
                <td>Sex:</td>
                <td>Salary:</td>
                <td>Degrees:</td>
            </tr>

            <?php
                $mysqli = new mysqli("localhost", "cs332s43", "cootieng", "cs332s43");
                $result = $mysqli->query("SELECT * FROM professor");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $row["p_phone"]);
                        $salary = number_format($row["salary"]);
                        echo "<tr>";
                        echo "<td>" . $row["p_ssn"]  . "</td>";
                        echo "<td>" . $row["title"]  . "</td>";
                        echo "<td>" . $row["p_name"] . "</td>";
                        echo "<td>" . $row["address"]. "</td>";
                        echo "<td>" . $number        . "</td>";
                        echo "<td>" . $row["sex"]    . "</td>";
                        echo "<td>$". $salary        . "</td>";
                        echo "<td>" . $row["college_degrees"]  . "</td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "No students in the database";
                }
            ?>
            
        </table>
    </div>
</div>