<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-04-10
 * Time: 23:49
 */
use takeCSV;
use setUpWeb;
use Pokedex;
use record;
class Factory {
    public static function create(Array $Pokemon = null, Array $values = null) {
        $record = new record($Pokemon, $values);
        return $record;
    }
}