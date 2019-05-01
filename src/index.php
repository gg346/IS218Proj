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

<div class='container'>
    <div class="col-md-12">
        <div class="page-header">
            <h1>
                Find A Car
            </h1>
        </div>
    </div>
<div class='row-fluid'>
    <div class='col-md-12'>
        <table class='table table-striped table-hover table-bordered' style="margin: 100px; padding-top: 20px; padding-left: 360px">
                <tr>
                    <th>Year</th>

                    <th>Make</th>

                    <th>Model</th>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
                
        <table class='table table-hover table-inverse'></table>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-sm ">
                <?php
                include('../src/File.php');
                include('../src/database/SQLconnect.php');
                $records = File::readCSVtoArray("../data/Cars.csv", 'Make');
                $table = File::printArrayAsTable($records);
                echo $table;
                $pdo = (new SQLiteConnection())->connect();
                if ($pdo != null)
                    echo 'Connected to the SQLite database successfully!';
                else
                    echo 'Whoops, could not connect to the SQLite database!';
                $stmt = $pdo->prepare('SELECT * FROM contacts');
                $stmt->execute();
                ?>
                <form action="../src/upload.php" method="post" enctype="multipart/form-data">
                    Select file to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload File" name="submit">
                </form>
            </div>
        </div>
    </div>
        
</body>
</html>