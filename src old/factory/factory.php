<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/25/2019
 * Time: 11:38 AM
 */

use takeCSV;
use setUpWeb;
use cars;
use record;

class Factory {
    public static function create(Array $cars = null, Array $values = null) {
        $record = new record ($cars, $values);
        return $record;
    }
}