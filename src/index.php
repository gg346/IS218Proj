<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-04-10
 * Time: 15:31
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="table-responsive-sm">
    <table class="table">
        <?php
        include("Pokedex.php");
        Pokedex::start("../data/pokemon.csv");
        ?>
    </table>
</div>
<div class="table-responsive-sm">
    <table class = "table">

    <h1>Table</h1>
    <?php include("Pokedex.php");
    Pokedex::start("../data/Pokemon.csv");?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </table>
</div>
</body>

</body>
</html>

