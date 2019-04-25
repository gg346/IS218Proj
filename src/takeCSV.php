<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 2019-04-10
 * Time: 23:48
 */

class takeCSV
{
    static public function getRecords($filename) {
        $Cars = fopen($filename,"r");
        $Car = array();
        $num = 0;
        while(! feof($Cars))
        {
            $record = fgetcsv($Cars);
            if($num == 0) {
                $Car = $record;
            } else {
                $records[] = Factory::create($Car, $record);
            }
            $num++;
        }
        fclose($Cars);
        return $records;
    }
}