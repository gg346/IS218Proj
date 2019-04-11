<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-04-10
 * Time: 23:48
 */

class takeCSV
{
    static public function getRecords($filename) {
        $Pokedex = fopen($filename,"r");
        $Pokemon = array();
        $num = 0;
        while(! feof($Pokedex))
        {
            $record = fgetcsv($Pokedex);
            if($num == 0) {
                $Pokemon = $record;
            } else {
                $records[] = Factory::create($Pokemon, $record);
            }
            $num++;
        }
        fclose($Pokedex);
        return $records;
    }
}