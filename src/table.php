<?php
/**
 * Created by PhpStorm.
 * User: YoungB
 * Date: 5/1/2019
 * Time: 1:50 PM
 */

class table
{
    public static function table(String $rows) {
        return '<table>' . $rows . '</table>';
    }
    public static function heading(String $headings) {
        return '<heading>' . $headings . '</heading>';
    }
    public static function column(String $columns) {
        return '<column>' . $columns . '</column>';
    }
    public static function td(String $data) {
        return '<td>' . $data . '</td>';
    }
}
?>

    <div class="row">
        <table class="table">
            <?php
            $data = ($file::readCSVtoArray("../data/Cars.csv"));
            echo(CreateTable::create_HTML_Table($data[0], $data[1]));
            ?>
        </table>
    </div>

