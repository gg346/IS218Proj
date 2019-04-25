<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/25/2019
 * Time: 11:40 AM
 */

use takeCSV;
use setUpWeb;
use factory;
use record;

class cars
{
    static public function start($filename) {
        $records = takeCSV::getRecords($filename);
        $table = setUpWeb::setUp($records);
        echo $table;
    }

}