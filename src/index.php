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

<div class="container">
    <div class="col-md-12">
        <div class="page-header">
            <h1>
                Find A Car
            </h1>
        </div>


        <div class="panel panel-success">
            <div class="panel-heading ">
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                        <table 	id="table"
                                  data-show-columns="true"
                                  data-height="460">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>