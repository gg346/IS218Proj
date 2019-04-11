<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-04-10
 * Time: 23:49
 */
use takeCSV;
use setUpWeb;
use Factory;
use record;
class Pokedex
{
    static public function start($filename) {
        $records = takeCSV::getRecords($filename);
        $table = setUpWeb::setUp($records);
        echo $table;
    }
}