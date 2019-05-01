<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/11/2019
 * Time: 12:59 AM
 */

require_once '../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find A Car</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
    <link type="text/css" href="css/font-awesome.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="stylesheets/main.css">

</head>
<body>

echo "<div class='container'>";
    echo "<div class='row-fluid'>";

        echo "<div class='col-xs-6'>";
            echo "<div class='table-responsive'>";

                echo "<table class='table table-hover table-inverse'>";

                    echo "<tr>";
                        echo "<th>Year</th>";
                        echo "<th>Make</th>";
                        echo "<th>Model</th>";
                        echo "</tr>";

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                    echo "<tr>";
                        echo "<td>" . $row["Year"] . "</td>";
                        echo "<td>" . $row["Make"] . "</td>";
                        echo "<td>" . $row["Model"] . "</td>";
                        echo "</tr>";
                    }
                    } else {
                    echo "0 results";
                    }

                    echo "</table>";

                echo "<table class='table table-hover table-inverse'>";


                    echo "<tr>";
                        echo "<th>make</th>";
                        echo "<th>year</th>";
                        echo "</tr>";

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                    echo "<tr>";
                        echo "<td>" . $row["make"] . "</td>";
                        echo "<td>" . $row["year"] . "</td>";
                        echo "</tr>";
                    }
                    } else {
                    echo "0 results";
                    }

                    echo "</table>";
                echo "</div>";
            echo "</div>";
        /*

mysqli_close($link);
?>
        
</body>
</html>